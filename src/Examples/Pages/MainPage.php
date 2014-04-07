<?php
use Framework\Page;
use Framework\View;

class MainPage extends Page {

    public function execute() {
        $directories = new DirectoryIterator(PATTERNS_DIRECTORY);
        /**
         * @var SplFileInfo $directory
         * @var $pattern PatternExample
         */

        foreach ($directories as $directory) {
            $exampleFileName = $directory->getPathname() . DIRECTORY_SEPARATOR . 'Example.php';
            if (file_exists($exampleFileName)) {
                $className = $directory->getFilename() . '\Example';
                $pattern = new $className();
                $view = new View('patternElement.phtml');
                $view->name = $pattern->getName();
                $view->description = $pattern->getDescription();
                $view->render();
            }
        }


    }

    protected function getPageDescription() {
        return 'List of all available examples';
    }

    protected function getPageName() {
        return 'Design Patterns Index';
    }


}