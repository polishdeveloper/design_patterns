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

        $div = new Div();
        $div->addChild(new H1('Wzorce projektowe'));
        $div->addChild(new P('Definicja...'));
        $sub = new Div();
        $sub->addChild(new P('Klasyfikacja...'));
        $div->addChild($sub);
        echo $div->render(), "\n";
        ?>
    </body>
</html>
