<?php

class RawImage extends AbstractImage {

    public function __construct($path) {
        $this->_path = $path;
        list ($this->_width, $this->_height) = getimagesize($path);
        $this->_data = file_get_contents($path);
    }

    public function dump() {
        return $this->_data;
    }

}

?>
