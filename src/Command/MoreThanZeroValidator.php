<?php
namespace Command;

class MoreThanZeroValidator implements Validator {

    public function isValid($value) {
        return $value > 0;
    }

}

?>
