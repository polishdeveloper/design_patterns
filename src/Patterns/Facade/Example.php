<?php
namespace Facade;

class Example extends \PatternExample {

    public function execute()
    {
        //without facade
        $adder = new Adder();
        echo '54 + 13 = ', $adder->add(54, 13), "\n<br/>";
        $divider = new Divider();
        echo '36 / 6 = ', $divider->divide(36, 6), "\n<br/>";

        //with facade
        $calculatorFactory = new CalculatorFactory;
        $calculator = $calculatorFactory->getCalculator();
        echo '54 + 13 = ', $calculator->calculate('54 + 13'), "\n<br/>";
        echo '36 / 6 = ', $calculator->calculate('36 / 6'), "\n";
    }
}