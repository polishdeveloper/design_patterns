<?php
namespace Command;

class EvenValidator implements Validator {

    public function isValid($value) {
        return $value % 2 == 0;
    }

}

?>
