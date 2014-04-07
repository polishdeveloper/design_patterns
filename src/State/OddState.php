<?php
namespace State;

class OddState implements State {

    public function parse($input) {
        if ($input == 1) {
            return new EvenState();
        } else {
            return $this;
        }
    }

    public function valid() {
        return false;
    }

}

?>
