<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $sum = new TemplateMethod\Sum(11,22);
        echo $sum->getOperationResult() . "<br/>";

        $sub = new TemplateMethod\NonNegativeSubstraction(22, 11);
        echo $sub->getOperationResult() . "<br/>";

        ?>
    </body>
</html>
