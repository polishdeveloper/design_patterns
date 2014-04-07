<?php
namespace FactoryMethod;

class Example extends \PatternExample {

    public function execute()
    {
        $fileName = __DIR__ . DIRECTORY_SEPARATOR . 'data'.DIRECTORY_SEPARATOR.'application';

        $readerFactory = new SimpleReaderFactory();
        //$reader = $readerFactory->createReader(FactoryMethod\SimpleReaderFactory::TXT_READER);
        $reader = $readerFactory->createReader(SimpleReaderFactory::XML_READER);

        echo "Content loaded: " . htmlentities($reader->read($fileName));
    }
}