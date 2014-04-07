<?php
namespace ChainOfResponsibility;

abstract class AbstractKeyValueStore implements KeyValueStore {

    protected $_nextHandler;

    public function __construct(KeyValueStore $handler) {
        $this->_nextHandler = $handler;
    }

    public function get($key) {
        return $this->_nextHandler->get($key);
    }

}

?>
