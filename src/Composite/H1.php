<?php
namespace Composite;

class H1 implements HtmlElement {

    private $_text;

    public function __construct($text) {
        $this->_text = $text;
    }

    public function render() {
        return "<h1>" . $this->_text . "</h1>";
    }

}

?>
