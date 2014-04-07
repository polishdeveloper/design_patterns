<?php
namespace Singleton;

class Logger {
    const LOG_FILENAME = "log.txt";

    private static $_instance;
    private $_fp;

    private function __construct() {
        $this->_fp = fopen(DATA_FOLDER . self::LOG_FILENAME, 'a');
        register_shutdown_function(array($this, 'shutdown'));
    }

    public static function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private final function __clone() {

    }

    public function shutdown() {
        fclose($this->_fp);
    }

    public function log($text) {
        $result = fwrite($this->_fp, $text . PHP_EOL);
        if ($result === false) {
            throw new \RuntimeException('Cannot log');
        }
    }

}

?>
