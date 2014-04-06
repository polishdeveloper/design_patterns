<?php

class TextFileReaderWriterFactory implements AbstractReaderWriterFactory {

    static private $_instance;

    private function __construct() {
        
    }

    static public function getInstance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private final function  __clone() {

    }

    public function createReader() {
        return new TextFileReader();
    }

    public function createWriter() {
        return new TextFileWriter();
    }

}

?>
