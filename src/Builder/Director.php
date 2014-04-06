<?php

class Director {

    private $_builder;

    function __construct(TreeBuilder $_builder) {
        $this->_builder = $_builder;
    }

    function constructTree($values) {
        $this->_builder->reset();
        $this->_builder->addValues($values);
    }

    function getConstructedTree() {
        return $this->_builder->getTree();
    }

    public function buildPizza() {
        $this->_builder->buildDough();
        $this->_builder->buildSauce();
        $this->_builder->buildTopping();
    }

}



?>
