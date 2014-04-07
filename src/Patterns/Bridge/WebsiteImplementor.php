<?php
namespace Bridge;

interface WebsiteImplementor {

    public function containsLinkTo($address);

    public function getAddress();
}

?>
