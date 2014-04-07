<?php

class Director {

    /**
     * @var TreeBuilder
     */
    private $_builder;

    /**
     * @param TreeBuilder $_builder
     */
    function __construct(TreeBuilder $_builder) {
        $this->_builder = $_builder;
    }

    /**
     * Creates a tree
     * @param array $values
     */
    function constructTree(array $values) {
        $this->_builder->reset();
        $this->_builder->addValues($values);
    }

    /**
     * @return Tree
     */
    function getConstructedTree() {
        return $this->_builder->getTree();
    }

}



?>
