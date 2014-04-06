<?php

class LabelledInputText extends InputText {

    protected $_label;

    public function setLabel($label) {
        $this->_label = $label;
    }

    public function __toString() {
        return "<label for=\"{$this->_name}\">{$this->_label}</label>\n"
        . parent::__toString();
    }

}

?>
