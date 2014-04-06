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

        $input = new LabelledInputText('nickname');
        $input->setLabel('Nick:');
        echo $input . "<br/>\n";

        $errorInput = new ErrorInputText('nickname');
        $errorInput->setError('You must enter a unique nickname');
        echo $errorInput;
        ?>
    </body>
</html>
