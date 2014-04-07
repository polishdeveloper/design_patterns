<?php
namespace Bridge;

class Website {

    private $_imp;

    public function __construct(WebsiteImplementor $imp) {
        $this->_imp = $imp;
    }

    public function getAddress() {
        return $this->_imp->getAddress();
    }

    public function containsLinkTo($anotherWebsite) {
        if ($anotherWebsite instanceof Website) {
            $anotherWebsite = $anotherWebsite->getAddress();
        }
        return $this->_imp->containsLinkTo($anotherWebsite);
    }

    public function containsLinks(array $addresses) {
        $result = true;
        foreach ($addresses as $a) {
            if (!$this->containsLinkTo($a)) {
                $result = false;
            }
        }
        return $result;
    }

}

?>
