<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $input = new Mediator\InputElement();
        $input->addFilter(new Mediator\EmptyFilter())
                ->addFilter(new Mediator\TrimFilter())
                ->addFilter(new Mediator\HtmlEntitiesFilter());
        $input->setValue('  this is a test of <b>mediator</b> pattern  ');

        echo '[' . $input->getValue() . ']';


        ?>
    </body>
</html>
