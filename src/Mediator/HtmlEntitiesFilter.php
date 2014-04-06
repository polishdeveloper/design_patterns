<?php

class HtmlEntitiesFilter implements Filter {

    public function filter($value) {
        return htmlentities($value);
    }

}

?>
