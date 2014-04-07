<?php
namespace Strategy;

class Example extends \PatternExample {

    public function execute()
    {
        $number = new Collection(array(4,7,1,2,4,9,7));
        $number->setComparator(new NumericComparator());
        $number->sort();
        $number->printAll();

        $objects = new Collection(array(array(1,3,4), new Collection(array(1,2,8,4,5)), array(1,4)));
        $objects->setComparator(new CountableObjectComparator());
        $objects->sort();
        $objects->printAll();
    }
}