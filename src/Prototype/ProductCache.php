<?php

class ProductCache {

    private static $_instance;
    private $_productsMap = array();

    private function __construct() {
        $this->loadProducts();
    }

    static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private final function __clone() {

    }

    public function getProduct($productSKU) {
        if (array_key_exists($productSKU, $this->_productsMap)) {
            return clone $this->_productsMap[$productSKU];
        }
        return null;
    }

    private function loadProducts() {
        $book = new Book();
        $book->setDescription("Design Patterns in PHP");
        $book->setSKU("b1");
        $this->storeProductInCache($book);

        $dvd = new DVD();
        $dvd->setDescription("Zend Framework");
        $dvd->setSKU("d1");
        $dvd->setDuration(124);
        $this->storeProductInCache($dvd);
    }

    private function storeProductInCache(Product $product) {
        $this->_productsMap[$product->getSKU()] = $product;
    }

}

?>
