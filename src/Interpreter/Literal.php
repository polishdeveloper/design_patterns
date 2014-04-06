<?php

class Literal implements MathExpression {

    private $_value;

    function __construct($value) {
        $this->_value = $value;
    }

    public function evaluate(array $values) {
        return $this->_value;
    }

}

?>
