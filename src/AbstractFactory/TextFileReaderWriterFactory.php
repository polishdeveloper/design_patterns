<?php

class TextFileReaderWriterFactory implements AbstractReaderWriterFactory {

    /**
     * @var TextFileReaderWriterFactory
     */
    static private $_instance;


    static public function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    private function __construct() {}
    private final function  __clone() {}

    /**
     * @return Reader
     */
    public function createReader() {
        return new TextFileReader();
    }

    /**
     * @return Writer
     */
    public function createWriter() {
        return new TextFileWriter();
    }

}

?>
