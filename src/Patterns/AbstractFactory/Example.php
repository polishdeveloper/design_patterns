<?php
namespace AbstractFactory;

class Example extends \PatternExample {


    public function getDescription()
    {
        return 'Description of Abstract Factory pattern';
    }

    public function execute()
    {
        $fileName = DATA_FOLDER . 'application';
        $content = "Very important data stored at " . date('Y-m-d H:i:s');

        $rwFactory = new TextFileReaderWriterFactory();
        //$rwFactory = new AbstractFactory\XMLFileReaderWriterFactory();

        $reader = $rwFactory->createReader();
        $writer = $rwFactory->createWriter();

        $writer->write($fileName, $content);
        echo "Content loaded: " . htmlentities($reader->read($fileName)) . "<br/>\n";
        echo "Content saved: " . $content . "<br/>\n";
    }

}