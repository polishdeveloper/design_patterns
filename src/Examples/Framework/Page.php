<?php
namespace Framework;

abstract class Page {

    private $content;

    abstract protected function getPageName();
    abstract protected function getPageDescription();
    abstract protected function execute();


    public function render() {
        $this->layout->pageName = $this->getPageName();
        $this->layout->pageDescription = $this->getPageDescription();
        $this->layout->setContent($this->content);
        ob_start();
        $this->layout->render();
        return ob_get_clean();
    }

    public function __construct() {
        $this->layout = new Layout();
    }

    public function run() {
        ob_start();
        try {
            $this->execute();
        } catch (\Exception $e) {
            ob_get_flush();
            throw $e;
        }
        $this->content = ob_get_clean();
    }



}


