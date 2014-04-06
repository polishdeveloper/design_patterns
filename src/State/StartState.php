<?php

class StartState implements State {

    public function parse($input) {
        if ($input == 1) {
            return new OddState();
        } else if ($input == 0) {
            return new EvenState();
        }
        throw new Exception("Illegal argument exception");
    }

    public function valid() {
        throw new Exception("Illegal state exception");
    }

}

?>
