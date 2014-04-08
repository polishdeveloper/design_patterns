<?php
use Framework\Page;


class ExceptionPage extends Page {

    /**
     * @var Exception
     */
    private $exception;

    public function setException(Exception $e) {
        $this->exception = $e;
    }

    protected function getPageName()
    {
        return "Error occured";
    }

    public function getPageDescription() {
        return $this->exception->getMessage();
    }

    protected function execute()
    {
        echo 'Stacktrace : <pre>' . $this->exception->getTraceAsString() . '</pre>';
    }
}
