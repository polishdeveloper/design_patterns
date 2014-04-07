<?php
namespace Bridge;

class PresentationWebsite extends Website {

    public function getAddress() {
        $address = 'http://' . parent::getAddress();
        return "<a href=\"$address\">$address</a>";
    }

}

?>
