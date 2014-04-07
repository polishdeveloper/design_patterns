<?php
namespace Decorator;

abstract class HtmlElementDecorator implements HtmlElement {

    protected $_element;

    public function __construct(HtmlElement $input) {
        $this->_element = $input;
    }

    public function getName() {
        return $this->_element->getName();
    }

    public function __toString() {
        return $this->_element->__toString();
    }

}

?>
