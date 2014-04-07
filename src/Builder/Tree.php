<?php
namespace Builder;

class Tree {

    private $_value;
    private $_left;
    private $_right;

    function __construct($_value) {
        $this->_value = $_value;
    }

    public function getValue() {
        return $this->_value;
    }

    public function setValue($value) {
        $this->_value = $value;
    }

    public function getLeft() {
        return $this->_left;
    }

    public function setLeft($left) {
        $this->_left = $left;
    }

    public function getRight() {
        return $this->_right;
    }

    public function setRight($right) {
        $this->_right = $right;
    }

}

?>
