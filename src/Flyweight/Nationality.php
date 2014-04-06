<?php

class Nationality {

    private static $_instances = array();

    public static function getInstance($nationName) {
        if (!isset(self::$_instances[$nationName])) {
            echo "Nationality created";
            self::$_instances[$nationName] = new self($nationName);
        }
        return self::$_instances[$nationName];
    }

    private function __construct($nationName) {
        $this->nationName = $nationName;
    }

    public final function __clone() {

    }

    public function __toString() {
        return $this->nationName;
    }

}

?>
