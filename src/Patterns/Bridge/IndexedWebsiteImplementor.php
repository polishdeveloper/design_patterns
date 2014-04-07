<?php
namespace Bridge;

class IndexedWebsiteImplementor implements WebsiteImplementor {

    private $_address;
    private $_links;

    public function __construct($address, array $linked) {
        $this->_address = $address;
        $this->_links = $linked;
    }

    public function getAddress() {
        return $this->_address;
    }

    public function containsLinkTo($address) {
        return in_array($address, $this->_links);
    }

}

?>
