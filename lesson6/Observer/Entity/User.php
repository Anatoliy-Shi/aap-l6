<?php

declare(strict_types=1);

namespace Observer\Entity;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject
{
    /**
     * @var string
     */
    private $name;
    private $email;
    private $expAge;
    private $vacancy;

    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * UserObserver constructor.
     * @param string $name
     */
    public function __construct(string $name, string $email, float $expAge)
    {
        $this->name = $name;
        $this->email = $email;
        $this->expAge = $expAge;
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
        echo "пользователь '{$this->name}', email - '{$this->email}' и опытом работы '{$this->expAge}' подписался <br>";
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
        echo "пользователь '{$this->name}', email - '{$this->email}' и опытом работы '{$this->expAge}' отписался <br>";
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }


    /**
     * @return string
     */

}