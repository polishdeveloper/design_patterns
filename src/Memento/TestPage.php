<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('../init.php');

        $service = new Memento\Service('http://truenorthphp.ca/');
        $service->init();
        echo htmlentities($service->getLine()) . "<br />\n";
        echo htmlentities($service->getLine()) . "<br />\n";

        $memento = $service->getState();  // now we can store Memento in the session, let's simulate its handling
        echo "<b>Memento is stored, printing one extra line</b><br/>\n";
        echo htmlentities($service->getLine()) . "<br />\n";

        $mementoString = serialize($memento); //to store it somewhere in session
        unset($service);

        echo "<b>Restoring the memento, last line should be duplicated because snapshot was taken before printing 3rd line</b><br/>\n";
        $newService = new Memento\Service();
        $newService->setState(unserialize($mementoString));
        echo htmlentities($newService->getLine()) . "<br />\n";
        echo htmlentities($newService->getLine()) . "<br />\n";
        echo htmlentities($newService->getLine()) . "<br />\n";
        ?>
    </body>
</html>
