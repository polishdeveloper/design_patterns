<?php
namespace Decorator;

class LabelDecorator extends HtmlElementDecorator {

    protected $_label;

    public function setLabel($label) {
        $this->_label = $label;
    }

    public function __toString() {
        return $this->getLabelAsHTML() . $this->_element->__toString();
    }

    private function getLabelAsHTML() {
        $name = $this->getName();
        return "<label for=\"{$name}\">{$this->_label}</label>\n";
    }

}

?>
