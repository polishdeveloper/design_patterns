<?php
namespace ChainOfResponsibility;

class SlowStore implements KeyValueStore {

    protected $_values;

    public function __construct(array $values = array()) {
        $this->_values = $values;
    }

    public function get($key) {
        if (isset($this->_values[$key])) {
            return $this->_values[$key];
        }
        return null;
    }

}

?>
