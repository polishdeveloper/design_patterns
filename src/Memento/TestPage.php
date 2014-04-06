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

//Caretaker code
        $service = new Service('http://logicait.pl');
        $service->init();
        echo $service->getLine();
        echo $service->getLine();
        echo $service->getLine();
        $memento = $service->getState();
// now we can store Memento in the session
// let's simulate its handling
        $mementoString = serialize($memento);
        $newService = new Service();
        $newService->setState(unserialize($mementoString));
        echo $newService->getLine();
        echo $newService->getLine();
        echo $newService->getLine();
        ?>
    </body>
</html>
