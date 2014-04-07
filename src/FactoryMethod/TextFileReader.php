<?php
namespace FactoryMethod;

class TextFileReader implements Reader {
    const FILE_EXTENSION = ".txt";

    /**
     * @param string $fileName
     * @return string
     */
    public function read($fileName) {
        $text = file_get_contents($fileName . self::FILE_EXTENSION)
                or die("Error while reading from file: " . $fileName . self::FILE_EXTENSION);
        return $text;
    }

}

?>
