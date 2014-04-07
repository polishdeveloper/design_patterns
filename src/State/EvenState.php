<?php
namespace State;

class EvenState implements State {

    public function parse($input) {
        if ($input == 1) {
            return new OddState();
        } else {
            return $this;
        }
    }

    public function valid() {
        return true;
    }

}

?>
