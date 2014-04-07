<?php
namespace Decorator;

class InputText implements HtmlElement {

    protected $_name;

    public function __construct($name) {
        $this->_name = $name;
    }

    public function getName() {
        return $this->_name;
    }

    public function __toString() {
        return "<input type=\"text\" id=\"{$this->_name}\" name=\"{$this->_name}\" />\n";
    }

}

?>
