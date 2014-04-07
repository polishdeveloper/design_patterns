<?php
namespace Observer;

class Example extends \PatternExample {

    public function execute()
    {
        $user = new User('Lukasz');
        $user->attach(new TwitterStatusObserver());
        $user->setStatus("I'm working");
    }
}