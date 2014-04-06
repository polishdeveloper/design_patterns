<?php

class CalculatorFactory {

    public function getCalculator() {
        return new Calculator(new Adder(), new Subtractor(), new Multiplier(), new Divider());
    }

}

?>
