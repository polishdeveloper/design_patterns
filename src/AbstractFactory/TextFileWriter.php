<?php

class TextFileWriter implements Writer {
    const FILE_EXTENSION = ".txt";

    /**
     * @param string $fileName
     * @param string $content
     * @throws RuntimeException
     */
    public function write($fileName, $content) {
        $filename = $fileName . self::FILE_EXTENSION;
        $result = file_put_contents($filename, $content);

        if ($result === false) {
            throw new RuntimeException('Error while writing to file:' . $fileName);
        }

    }

}

?>
