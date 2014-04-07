<?php
namespace State;

class StartState implements State {

    public function parse($input) {
        if ($input == 1) {
            return new OddState();
        } else if ($input == 0) {
            return new EvenState();
        }
        throw new \InvalidArgumentException();
    }

    public function valid() {
        throw new \RuntimeException("Illegal state exception");
    }

}

?>
