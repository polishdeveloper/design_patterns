<?php
namespace Facade;

class Divider {

    public function divide($a, $b) {
        if ($b == 0) {
            throw new \RuntimeException('Division by zero.');
        }
        return $a / $b;
    }

}

?>
