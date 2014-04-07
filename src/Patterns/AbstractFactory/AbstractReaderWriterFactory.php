<?php
namespace AbstractFactory;

interface AbstractReaderWriterFactory {

    /**
     * @return Reader
     */
    function createReader();

    /**
     * @return Writer
     */
    function createWriter();
}

?>
