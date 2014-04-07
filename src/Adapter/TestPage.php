<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $array = array('red', 'black', 'green', 'white');
        $adapter = new Adapter\ArrayAdapter($array);
        $printer = new Adapter\Printer();
        $printer->printAll($adapter);
        ?>
    </body>
</html>
