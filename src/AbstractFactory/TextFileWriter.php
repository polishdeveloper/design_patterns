<?php

class TextFileWriter implements Writer {
    const FILE_EXTENSION = ".txt";

    public function write($fileName, $content) {
        file_put_contents($fileName . self::FILE_EXTENSION, $content)
                or die('Error while writing to file:' . $fileName . self::FILE_EXTENSION);
    }

}

?>
