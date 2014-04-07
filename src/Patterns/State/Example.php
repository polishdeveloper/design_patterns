<?php
namespace State;

class Example extends \PatternExample {

    public function execute()
    {
        throw new \Exception('die');
        $validator = new ParityBitValidator(new StartState());
        var_dump($validator->isValid('10101001101'));
        var_dump($validator->isValid('101010011011'));
    }
}