<?php
namespace TemplateMethod;

class Example extends \PatternExample {

    public function execute()
    {
        $sum = new Sum(11,22);
        echo $sum->getOperationResult() . "<br/>";

        $sub = new NonNegativeSubstraction(22, 11);
        echo $sub->getOperationResult() . "<br/>";
    }
}