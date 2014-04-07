<?php
namespace ChainOfResponsibility;

class Example extends \PatternExample {

    public function execute()
    {
        $store = new SlowStore(array('pm' => 'Peter Miazga',
            'js' => 'John Smith',
            'ek' => 'Emma Kowalski',
            'rj' => 'Robert Johnson'));

        $cache = new InMemoryKeyValueStore($store);
        $frontEnd = new SafeKeyValueStore($cache);

        echo $frontEnd->get('pm'), "\n<br/>";
        echo $frontEnd->get('js'), "\n<br/>";
        echo $frontEnd->get('js'), "\n<br/>";
    }
}