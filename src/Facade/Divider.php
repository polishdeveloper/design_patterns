<?php

class Divider {

    public function divide($a, $b) {
        if ($b == 0) {
            throw new Exception('Division by zero.');
        }
        return $a / $b;
    }

}

?>
