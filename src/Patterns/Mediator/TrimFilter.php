<?php
namespace Mediator;

class TrimFilter implements Filter {

    public function filter($value) {
        return trim($value);
    }

}

?>
