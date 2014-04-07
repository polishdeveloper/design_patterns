<?php
namespace Prototype;

class DVD extends Product {

    private $_duration;

    public function getDuration() {
        return $this->_duration;
    }

    public function setDuration($duration) {
        $this->_duration = $duration;
    }

}

?>

