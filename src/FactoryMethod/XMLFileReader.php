<?php

class XMLFileReader implements Reader {
    const FILE_EXTENSION = ".xml";

    public function read($fileName) {
        $xml = simplexml_load_file($fileName . self::FILE_EXTENSION)
                or die("Error while reading from file: " . $fileName . self::FILE_EXTENSION);
        return $xml->asXML();
    }

}

?>
