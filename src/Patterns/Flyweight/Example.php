<?php
namespace Flyweight;

class Example extends \PatternExample {

    public function execute()
    {
        $user1 = new User();
        $user1->setFirstName("Rob")
            ->setLastName("Ford")
            ->setNationality(Nationality::getInstance("Canadian"));

        $user2 = new User();
        $user2->setFirstName("John")
            ->setLastName("Kowalski")
            ->setNationality(Nationality::getInstance("Polish"));

        $user1->setNationality(Nationality::getInstance("Polish"));

        var_dump($user1);
        var_dump($user2);
    }
}