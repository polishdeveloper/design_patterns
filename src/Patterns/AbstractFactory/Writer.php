<?php
namespace AbstractFactory;

interface Writer {
    /**
     * @param string $path
     * @param string $content
     * @throws \RuntimeException
     */
    function write($path, $content);
}

?>
