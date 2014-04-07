<?php
namespace Observer;

class User implements IdentityProvider {

    protected $_nickname;
    protected $_observers = array();
    protected $_status;

    public function __construct($nickname) {
        $this->_nickname = $nickname;
    }

    public function getName() {
        return $this->_nickname;
    }

    public function setStatus($text) {
        $this->_status = $text;
        $this->_notify();
    }

    public function getStatus() {
        return $this->_status;
    }


    public function attach(IdentityObserver $observer) {
        $this->_observers[] = $observer;
    }

    protected function _notify() {
        /**
         * @var IdentityObserver $observer
         */
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }

}

?>
