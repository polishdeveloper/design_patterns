<?php

class ErrorInputText extends InputText {

    protected $_error;

    public function setError($message) {
        $this->_error = $message;
    }

    public function __toString() {
        return parent::__toString()
        . "<span style='color:red;'>{$this->_error}</span>\n";
    }

}

?>
