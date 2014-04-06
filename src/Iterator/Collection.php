<?php

class Collection implements Iterator {

    private $_content;
    private $_index = 0;

    public function __construct(array $content) {
        $this->_content = $content;
    }

    public function rewind() {
        $this->_index = 0;
    }

    public function valid() {
        return isset($this->_content[$this->_index]);
    }

    public function current() {
        return $this->_content[$this->_index];
    }

    public function key() {
        return $this->_index;
    }

    public function next() {
        $this->_index++;
    }

}

?>
