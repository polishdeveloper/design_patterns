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

        $input = new InputElement();
        $input->addFilter(new EmptyFilter())
                ->addFilter(new TrimFilter())
                ->addFilter(new HtmlEntitiesFilter());
        $input->setValue('  to jest test <b>mediatora</b>  ');

        echo $input->getValue();


        ?>
    </body>
</html>
