<?php
namespace AbstractFactory;

class XMLFileWriter implements Writer {
    const FILE_EXTENSION = ".xml";
    const XML_ENVELOPE = "<?xml version='1.0'?><data>%s</data>";


    public function write($fileName, $content) {
        $xml = simplexml_load_string(sprintf(self::XML_ENVELOPE, $content));
        $result = file_put_contents($fileName . self::FILE_EXTENSION, $xml->asXML());
        if ($result === false) {
            throw new \RuntimeException('Error while writing to file:' . $fileName . self::FILE_EXTENSION);
        }
    }

}

?>
