<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $store = new ChainOfResponsibility\SlowStore(array('pm' => 'Peter Miazga',
                    'js' => 'John Smith',
                    'ek' => 'Emma Kowalski',
                    'rj' => 'Robert Johnson'));

        $cache = new ChainOfResponsibility\InMemoryKeyValueStore($store);
        $frontEnd = new ChainOfResponsibility\SafeKeyValueStore($cache);

        echo $frontEnd->get('pm'), "\n<br/>";
        echo $frontEnd->get('js'), "\n<br/>";
        echo $frontEnd->get('js'), "\n<br/>";
        ?>
    </body>
</html>
