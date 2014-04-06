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

        $processor = new ArrayProcessor(new EvenValidator());
        $processor->process(array(1, 20, 18, 5, 0, 31, 42));
        ?>
    </body>
</html>
