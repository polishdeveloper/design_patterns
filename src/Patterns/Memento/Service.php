<?php
namespace Memento;

class Service {

    protected $_url;
    protected $_currentLine = 0;
    protected $_content;

    public function __construct($url = null) {
        $this->_url = $url;
    }

    public function init() {
        $this->_content = file($this->_url);
        if ($this->_content === false) {
            throw new \RuntimeException('Cannot fetch ' . $this->_url);
        }
    }

    /**
     * @return ConcreteMemento
     */
    public function getState() {
        return new ConcreteMemento($this->_url, $this->_currentLine);
    }

    public function setState(ConcreteMemento $state) {
        if (!($state instanceof Memento)) {
            throw new \RuntimeException('Memento object not recognized.');
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
