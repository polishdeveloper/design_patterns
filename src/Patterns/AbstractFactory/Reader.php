<?php
namespace AbstractFactory;

interface Reader {

    /**
     * @param string $path Path to file to read
     * @throws \RuntimeException
     * @return string
     */
    function read($path);
}

?>
