<?php

abstract class PatternExample {

    public function getName() {
        $classname = get_class($this);
        $parts = explode('\\', $classname);
        return array_shift($parts);
    }

    public function getDescription() {
        return 'Fetch annotation';
    }
    abstract public function execute();
}