<?php

class Service {

    protected $_url;
    protected $_currentLine = 0;

    public function __construct($url = null) {
        $this->_url = $url;
    }

    public function init() {
        $this->_content = file($this->_url);
    }

    /**
     * @return ConcreteMemento
     */
    public function getState() {
        return new ConcreteMemento($this->_url, $this->_currentLine);
    }

    public function setState(ConcreteMemento $state) {
        if (!($state instanceof Memento)) {
            throw new Exception('Memento object not recognized.');
        }
        $this->_url = $state->getUrl();
        $this->_currentLine = $state->getCurrentLine();
        $this->init();
    }

    public function getLine() {
        $line = $this->_content[$this->_currentLine];
        $this->_currentLine++;
        return $line;
    }

}

?>
