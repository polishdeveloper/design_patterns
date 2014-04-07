<?php

class XMLFileReaderWriterFactory implements AbstractReaderWriterFactory {

    /**
     * @return Reader
     */
    public function createReader() {
        return new XMLFileReader();
    }

    /**
     * @return Writer
     */
    public function createWriter() {
        return new XMLFileWriter();
    }

}

?>
