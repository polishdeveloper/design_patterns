<?php
namespace Singleton;

class Example extends \PatternExample {

    public function execute()
    {
        $logEntry = "INFO: New log entry on " . date('Y-m-d H:i:s');
        Logger::getInstance()->log($logEntry);
        echo "<h5>Added new log entry:</h5> $logEntry ";

    }
}