<?php
use \Framework\Page;

class PatternPage extends Page {

    /**
     * @var PatternExample
     */
    private $patternExample;

    public function loadPattern($patternName) {
;
        if (preg_match('/^[a-zA-Z]+$/', $patternName) === 0) {
            throw new RuntimeException('Incorrect pattern name');
        }
        $className = "$patternName\Example";
        if (!class_exists($className)) {
            throw new RuntimeException('Design pattern not found');
        }
        $this->patternExample = new $className();
    }


    protected function getPageName()
    {
        return $this->patternExample->getName();
    }

    protected function execute()
    {
        $this->patternExample->execute();
    }

    public function getPageDescription() {
        return $this->patternExample->getDescription();
    }

}
