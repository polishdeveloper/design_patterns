<?php
namespace Interpreter;

interface MathExpression {

    /**
     * @param array $values
     * @return mixed
     */
    public function evaluate(array $values);
}

?>
