<?php
use \Framework\Page;

class PatternPage extends Page {

    /**
     * @var PatternExample
     */
    private $patternExample;

    public function loadPattern($patternName) {
        $className = "$patternName\\Example";
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