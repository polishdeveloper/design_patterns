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

        $input = new InputText('nickname');
        $labelled = new LabelDecorator($input);
        $labelled->setLabel('Nick:');
        echo $labelled . "<br/>\n";

        $input = new InputText('nickname');
        $error = new ErrorDecorator($input);
        $error->setError('You must enter a unique nickname');
        echo $error . "<br/>\n";

        $input = new InputText('nickname');
        $labelled = new LabelDecorator($input);
        $labelled->setLabel('Nick:');
        $error = new ErrorDecorator($labelled); 
        $error->setError('You must enter a unique nickname');
        echo $error;
        ?>
    </body>
</html>
