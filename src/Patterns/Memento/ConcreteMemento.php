<?php
namespace Memento;

class ConcreteMemento implements Memento {

    protected $_url;
    protected $_currentLine;

    public function __construct($url, $currentLine) {
        $this->_url = $url;
        $this->_currentLine = $currentLine;
    }

    public function getUrl() {
        return $this->_url;
    }

    public function getCurrentLine() {
        return $this->_currentLine;
    }

}
?>
