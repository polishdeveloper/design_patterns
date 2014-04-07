<?php

class SimpleReaderFactory implements AbstractReaderFactory {
    const TXT_READER = "txt";
    const XML_READER = "xml";

    /**
     * @param string $type Reader type
     * @return Reader
     * @throws InvalidArgumentException
     */
    public function createReader($type) {
        switch($type) {
            case SimpleReaderFactory::TXT_READER:
                return new TextFileReader();
            case SimpleReaderFactory::XML_READER:
                return new XMLFileReader();
            default :
            throw new InvalidArgumentException("Illegal reader type");
        }
    }
}

?>
