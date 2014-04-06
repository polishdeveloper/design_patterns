<?php

class Collection implements Countable {

    private $_elements;
    private $_comparator;

    function __construct(array $elements) {
        $this->_elements = $elements;
    }

    public function setComparator($comparator) {
        $this->_comparator = $comparator;
    }

    public function sort() {
        uasort($this->_elements, array($this->_comparator, 'compare'));
    }

    public function count() {
        return count($this->_elements);
    }

    public function printAll() {
        var_dump($this->_elements);
    }

}

?>
