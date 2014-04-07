<?php
namespace AbstractFactory;

class TextFileReaderWriterFactory implements AbstractReaderWriterFactory {

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
