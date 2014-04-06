<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function __autoload($className) {
            include_once $className . '.php';
        }


        $user1 = new User();
        $user1->setFirstName("Jan")
                ->setLastName("Kowalski")
                ->setNationality(Nationality::getInstance("Niemcy"));

        $user2 = new User();
        $user2->setFirstName("Maria")
                ->setLastName("Nowak")
                ->setNationality(Nationality::getInstance("Polska"));

        $user1->setNationality(Nationality::getInstance("Polska"));

        var_dump($user1);
        var_dump($user2);


        ?>
    </body>
</html>
