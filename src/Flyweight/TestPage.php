<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');


        $user1 = new Flyweight\User();
        $user1->setFirstName("Rob")
                ->setLastName("Ford")
                ->setNationality(Flyweight\Nationality::getInstance("Canadian"));

        $user2 = new Flyweight\User();
        $user2->setFirstName("John")
                ->setLastName("Kowalski")
                ->setNationality(Flyweight\Nationality::getInstance("Polish"));

        $user1->setNationality(Flyweight\Nationality::getInstance("Polish"));

        var_dump($user1);
        var_dump($user2);

        ?>
    </body>
</html>
