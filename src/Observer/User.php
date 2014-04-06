<?php

class User {

    protected $_nickname;
    protected $_observers = array();
    protected $_status;

    public function __construct($nickname) {
        $this->_nickname = $nickname;
    }

    public function getNickname() {
        return $this->_nickname;
    }

    public function attach(UserObserver $observer) {
        $this->_observers[] = $observer;
    }

    public function setStatus($text) {
        $this->_status = $text;
        $this->_notify();
    }

    public function getStatus() {
        return $this->_status;
    }

    protected function _notify() {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

}

?>
