<?php

class XMLFileReaderWriterFactory implements AbstractReaderWriterFactory {

    public function createReader() {
        return new XMLFileReader();
    }

    public function createWriter() {
        return new XMLFileWriter();
    }

}

?>
