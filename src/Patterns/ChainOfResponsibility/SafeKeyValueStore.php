<?php
namespace ChainOfResponsibility;

class SafeKeyValueStore extends AbstractKeyValueStore {

    public function get($key) {
        return htmlentities(parent::get($key), ENT_NOQUOTES, 'UTF-8');
    }

}

?>
