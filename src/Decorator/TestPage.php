<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $input = new Decorator\InputText('nickname');
        $labelled = new Decorator\LabelDecorator($input);
        $labelled->setLabel('Nick:');
        echo $labelled . "<br/>\n";

        $input = new Decorator\InputText('nickname');
        $error = new Decorator\ErrorDecorator($input);
        $error->setError('You must enter a unique nickname');
        echo $error . "<br/>\n";

        $input = new Decorator\InputText('nickname');
        $labelled = new Decorator\LabelDecorator($input);
        $labelled->setLabel('Nick:');
        $error = new Decorator\ErrorDecorator($labelled);
        $error->setError('You must enter a unique nickname');
        echo $error;
        ?>
    </body>
</html>
