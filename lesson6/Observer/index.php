<?php

namespace Observer;

use Observer\Entity\User;
use Observer\Observer\UpdateObserver;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$user = new User("Pavel", "da@me.ru", 25);
$user2 = new User("Ivan", "fe@mag.ru", 7);



$vacancy = new UpdateObserver();

$user->attach($vacancy);
$user->detach($vacancy);

$user2->attach($vacancy);
$user2->detach($vacancy);


//
//$vacancy->SplSubject::notify();
//
//$vacancy->SplSubject::detach($user);
//$vacancy->SplSubject::detach($user2);
