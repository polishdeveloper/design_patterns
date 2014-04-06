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

        //5(a + 11) gdzie a = 3;

        $expression 
        = new Product(new Literal(5), new Sum(new Variable('a'), new Literal(11)));


        echo $expression->evaluate(array('a' => 3));

        ?>
    </body>
</html>
