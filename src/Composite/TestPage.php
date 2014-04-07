<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $div = new Composite\Div();
        $div->addChild(new Composite\H1('Design Patterns'));
        $div->addChild(new Composite\P('Definition...'));
        $sub = new Composite\Div();
        $sub->addChild(new Composite\P('Classification...'));
        $div->addChild($sub);
        echo $div->render(), "\n";
        ?>
    </body>
</html>
