<?php
namespace Command;

class Example extends \PatternExample {

    public function getDescription()
    {
        return 'Description of command pattern';
    }

    public function execute()
    {
        $processor = new ArrayProcessor(new EvenValidator());
        $processor->process(array(1, 20, 18, 5, 0, 31, 42));
    }

}