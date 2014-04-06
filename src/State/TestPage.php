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

        $validator = new ParityBitValidator(new StartState());
        var_dump($validator->isValid('10101001101'));
        var_dump($validator->isValid('101010011011'));
        ?>
    </body>
</html>
