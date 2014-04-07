<?php
namespace Prototype;

class Book extends Product {

    private $_numberOfPages;

    public function getNumberOfPages() {
        return $this->_numberOfPages;
    }

    public function setNumberOfPages($numberOfPages) {
        $this->_numberOfPages = $numberOfPages;
    }

}

?>
