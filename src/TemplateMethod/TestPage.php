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

        $sum = new Sum(11,22);
        echo $sum->getOperationResult() . "<br/>";

        $sub = new NonNegativeSubstraction(22, 11);
        echo $sub->getOperationResult() . "<br/>";

        ?>
    </body>
</html>
