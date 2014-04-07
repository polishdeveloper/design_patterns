<?php
namespace Adapter;

class Example extends \PatternExample {

    public function execute()
    {
        $array = array('red', 'black', 'green', 'white');
        $adapter = new ArrayAdapter($array);
        $printer = new Printer();
        $printer->printAll($adapter);
    }

}