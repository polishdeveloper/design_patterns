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

        $number = new Collection(array(4,7,1,2,4,9,7));
        $number->setComparator(new NumericComparator());
        $number->sort();
        $number->printAll();

        $objects = new Collection(array(array(1,3,4), new Collection(array(1,2,8,4,5)), array(1,4)));
        $objects->setComparator(new CountableObjectComparator());
        $objects->sort();
        $objects->printAll();


        ?>
    </body>
</html>
