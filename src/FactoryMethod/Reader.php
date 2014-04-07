<?php

interface Reader {

    /**
     * @param string $path
     * @return string Content of file
     */
    function read($path);
}

?>
