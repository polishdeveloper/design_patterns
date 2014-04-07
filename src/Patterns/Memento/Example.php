<?php
namespace Memento;

class Example extends \PatternExample {

    public function execute()
    {
        $service = new Service('http://truenorthphp.ca/');
        $service->init();
        echo htmlentities($service->getLine()) . "<br />\n";
        echo htmlentities($service->getLine()) . "<br />\n";

        $memento = $service->getState();  // now we can store Memento in the session, let's simulate its handling
        echo "<b>Memento is stored, printing one extra line</b><br/>\n";
        echo htmlentities($service->getLine()) . "<br />\n";

        $mementoString = serialize($memento); //to store it somewhere in session
        unset($service);

        echo "<b>Restoring the memento, last line should be duplicated because snapshot was taken before printing 3rd line</b><br/>\n";
        $newService = new Service();
        $newService->setState(unserialize($mementoString));
        echo htmlentities($newService->getLine()) . "<br />\n";
        echo htmlentities($newService->getLine()) . "<br />\n";
        echo htmlentities($newService->getLine()) . "<br />\n";
    }
}