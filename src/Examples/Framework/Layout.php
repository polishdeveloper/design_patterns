<?php
namespace Framework;

class Layout extends View {

    protected $content = '';
    public $pageName = '';

    public function __construct() {
        parent::__construct('layout.phtml');
    }

    public function setContent($content) {
        $this->content = $content;
    }


}