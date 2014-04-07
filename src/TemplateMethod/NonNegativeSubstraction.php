<?php
namespace TemplateMethod;

class NonNegativeSubstraction extends BinaryOperation {

    private $_a;
    private $_b;

    public function __construct($a = 0, $b = 0) {
        $this->_a = $a;
        $this->_b = $b;
    }

    protected function _getFirstNumber() {
        return $this->_a;
    }

    protected function _getSecondNumber() {
        return $this->_b;
    }

    protected function _operator($a, $b) {
        return $a - $b;
    }

}

?>
