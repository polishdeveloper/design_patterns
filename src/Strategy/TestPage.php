<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $number = new Strategy\Collection(array(4,7,1,2,4,9,7));
        $number->setComparator(new Strategy\NumericComparator());
        $number->sort();
        $number->printAll();

        $objects = new Strategy\Collection(array(array(1,3,4), new Strategy\Collection(array(1,2,8,4,5)), array(1,4)));
        $objects->setComparator(new Strategy\CountableObjectComparator());
        $objects->sort();
        $objects->printAll();


        ?>
    </body>
</html>
