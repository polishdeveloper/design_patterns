<?php
namespace Composite;

class P implements HtmlElement {

    private $_text;

    public function __construct($text) {
        $this->_text = $text;
    }

    public function render() {
        return "<p>" . $this->_text . "</p>";
    }

}

?>
