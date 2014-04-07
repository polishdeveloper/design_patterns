<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $values = array(1, 3, 4, 6, 2, 4, 6, 2, 5, 7);

        $treeBuilder = new Builder\DefaultTreeBuilder();
        //$treeBuilder = new Builder\RandomTreeBuilder();

        $director = new Builder\Director($treeBuilder);

        $director->constructTree($values);
        echo "<pre>";
        print_r($director->getConstructedTree());
        echo "<pre>";
        ?>
    </body>
</html>
