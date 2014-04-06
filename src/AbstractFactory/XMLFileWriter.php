<?php

class XMLFileWriter implements Writer {
    const FILE_EXTENSION = ".xml";

    public function write($fileName, $content) {
        $xml = simplexml_load_string("<?xml version='1.0'?><data>" . $content . "</data>");
        file_put_contents($fileName . self::FILE_EXTENSION, $xml->asXML())
                or die('Error while writing to file:' . $fileName . self::FILE_EXTENSION);
    }

}

?>
