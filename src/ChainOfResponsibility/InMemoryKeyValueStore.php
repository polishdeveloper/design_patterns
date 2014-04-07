<?php
namespace ChainOfResponsibility;

class InMemoryKeyValueStore extends AbstractKeyValueStore {

    protected $_cached = array();

    protected function _load($key) {
        if (!isset($this->_cached[$key])) {
            $this->_cached[$key] = $this->_nextHandler->get($key);
        }
    }

    public function get($key) {
        $this->_load($key);
        return $this->_cached[$key];
    }

}

?>
