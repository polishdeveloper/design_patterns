<?php
namespace Prototype;

class Example extends \PatternExample {

    public function execute()
    {
        /**
         * @var Book $book
         */
        $productCache = ProductCache::getInstance();


        $book = $productCache->getProduct('b1');
        var_dump($book);
        $book->setDescription("First book in inventory");
        var_dump($productCache->getProduct('b1'));
    }
}