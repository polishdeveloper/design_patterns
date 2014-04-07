<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        //5(a + 11) where a = 3;

        $expression 
        = new Interpreter\Product(new Interpreter\Literal(5),
            new Interpreter\Sum(new Interpreter\Variable('a'), new Interpreter\Literal(11)));


        echo $expression->evaluate(array('a' => 3));

        ?>
    </body>
</html>
