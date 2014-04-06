<?php

interface AbstractReaderWriterFactory {
 
    function createReader();

    function createWriter();
}

?>
