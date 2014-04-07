<?php
namespace FactoryMethod;

class XMLFileReader implements Reader {
    const FILE_EXTENSION = ".xml";

    /**
     * @param string $fileName
     * @throws \RuntimeException
     * @return string
     */
    public function read($fileName) {
        $xml = simplexml_load_file($fileName . self::FILE_EXTENSION);
        if ($xml === false) {
            throw new \RuntimeException("Error while reading from file: " . $fileName . self::FILE_EXTENSION);
        }
        return $xml->asXML();
    }

}

?>
