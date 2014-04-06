<?php

class Product implements MathExpression {

    private $_a;
    private $_b;

    public function __construct(MathExpression $a, MathExpression $b) {
        $this->_a = $a;
        $this->_b = $b;
    }

    public function evaluate(array $values) {
        return $this->_a->evaluate($values) * $this->_b->evaluate($values);
    }

}

?>
