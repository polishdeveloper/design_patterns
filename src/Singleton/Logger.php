<?php

class Logger {
    const LOG_FILE = "log.txt";

    private static $_instance;
    private $_fp;

    private function __construct() {
        $this->_fp = fopen(self::LOG_FILE, 'a');
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
        fwrite($this->_fp, $text . "\n");
    }

}

?>
