<?php
namespace Builder;

class Example extends \PatternExample {

    public function execute()
    {
        $values = array(1, 3, 4, 6, 2, 4, 6, 2, 5, 7);

        $treeBuilder = new DefaultTreeBuilder();
        //$treeBuilder = new Builder\RandomTreeBuilder();

        $director = new Director($treeBuilder);

        $director->constructTree($values);
        echo "<pre>";
        print_r($director->getConstructedTree());
        echo "<pre>";
    }
}