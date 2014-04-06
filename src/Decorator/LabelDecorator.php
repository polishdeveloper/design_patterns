<?php

class LabelDecorator extends HtmlElementDecorator {

    protected $_label;

    public function setLabel($label) {
        $this->_label = $label;
    }

    public function __toString() {
        $name = $this->getName();
        return "<label for=\"{$name}\">{$this->_label}</label>\n"
        . $this->_element->__toString();
    }

}

?>
