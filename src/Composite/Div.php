<?php
namespace Composite;

class Div implements HtmlElement {

    private $_children = array();

    public function addChild(HtmlElement $element) {
        $this->_children[] = $element;
    }

    public function render() {
        $html = "<div>\n";
        foreach ($this->_children as $child) {
            $childRepresentation = $child->render();
            $childRepresentation = str_replace("\n", "\n    ", $childRepresentation);
            $html .= '    ' . $childRepresentation . "\n";
        }
        $html .= "</div>";
        return $html;
    }

}

?>
