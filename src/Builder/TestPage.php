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

        $values = array(1, 3, 4, 6, 2, 4, 6, 2, 5, 7);

        $treeBuilder = new DefaultTreeBuilder();
        //$treeBuilder = new RandomTreeBuilder();

        $director = new Director($treeBuilder);

        $director->constructTree($values);
        echo "<pre>";
        print_r($director->getConstructedTree());
        ?>
    </body>
</html>
