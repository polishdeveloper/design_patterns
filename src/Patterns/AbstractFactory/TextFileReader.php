<?php
namespace AbstractFactory;

class TextFileReader implements Reader {
    const FILE_EXTENSION = ".txt";

    /**
     * @param string $fileName
     * @throws \RuntimeException
     * @return string
     */
    public function read($fileName) {
        $filename = $fileName . self::FILE_EXTENSION;
        $text = file_get_contents($filename);
        if ($text === false) {
            throw new \RuntimeException("Error while reading from file: " . $fileName);
        }
        return $text;
    }

}

?>
