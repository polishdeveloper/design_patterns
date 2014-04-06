<?php

class EmptyFilter implements Filter {

    public function filter($value) {
        return $value ?: '';
    }

}

?>
