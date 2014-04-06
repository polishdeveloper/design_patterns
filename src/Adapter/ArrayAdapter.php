<?php

class ArrayAdapter implements Collection {

    private $_array;

    public function __construct(array $array) {
        $this->_array = $array;
    }

    public function add($element) {
        $this->_array[] = $element;
    }

    public function contains($element) {
        return in_array($element, $this->_array);
    }

    public function remove($element) {
        $index = array_search($element, $this->_array);
        if ($index !== false) {
            array_splice($this->_array, $index, 1);
        }
    }

    public function getIterator() {
        return new ArrayIterator($this->_array);
    }

}

?>
