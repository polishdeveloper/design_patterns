<?php
namespace Framework;

class View {

    private $scriptFilename;

    public function __construct($scriptFilename)
    {
        $fullPath = VIEWS_DIRECTORY . DIRECTORY_SEPARATOR . $scriptFilename;
        if (!file_exists($fullPath)) {
            throw new RuntimeException("View $scriptFilename doesn't exist");
        }
        $this->scriptFilename = $fullPath;
    }

    public function render() {
        include($this->scriptFilename);
    }
}