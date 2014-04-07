<?php
namespace Prototype;

class Product {

    private $_SKU;
    private $_description;

    public function getSKU() {
        return $this->_SKU;
    }

    public function setSKU($SKU) {
        $this->_SKU = $SKU;
    }

    public function getDescription() {
        return $this->_description;
    }

    public function setDescription($description) {
        $this->_description = $description;
    }

}

?>
