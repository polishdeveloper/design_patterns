<?php

class XMLFileReader implements Reader {
    const FILE_EXTENSION = ".xml";

    public function read($fileName) {
        $fileName .= self::FILE_EXTENSION;
        $xml = simplexml_load_file($fileName);
        if ($xml === false) {
            throw new RuntimeException("Error while reading from file: " . $fileName);
        }
        return $xml->asXML();
    }

}

?>
