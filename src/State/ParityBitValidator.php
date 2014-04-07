<?php
namespace State;

class ParityBitValidator {

    protected $_state;

    public function __construct(State $state) {
        $this->_state = $state;
    }

    public function isValid($bits) {
        for ($i = 0; $i < strlen($bits); $i++) {
            $bit = $bits[$i];
            $this->_state = $this->_state->parse($bit);
        }
        return $this->_state->valid();
    }

}

?>
