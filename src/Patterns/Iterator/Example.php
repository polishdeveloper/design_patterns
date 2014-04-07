<?php
namespace Iterator;

class Example extends \PatternExample {


    public function execute()
    {
        $array = array('A', 'B', 'C', 'D');
        echo "Collection: ";
        foreach (new Collection($array) as $key => $value) {
            echo "$key => $value. ";
        }
    }

}