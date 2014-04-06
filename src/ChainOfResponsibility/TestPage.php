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

        $store = new SlowStore(array('jn' => 'Jan Nowak',
                    'mn' => 'Maria Nowak',
                    'mm' => 'Michał Miły',
                    'bk' => 'Basia Kowalska'));

        $cache = new InMemoryKeyValueStore($store);
        $frontEnd = new SafeKeyValueStore($cache);

        echo $frontEnd->get('mm'), "\n<br/>";
        echo $frontEnd->get('bk'), "\n<br/>";
        echo $frontEnd->get('bk'), "\n<br/>";
        ?>
    </body>
</html>
