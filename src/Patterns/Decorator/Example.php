<?php
namespace Decorator;

class Example extends \PatternExample {

    public function execute()
    {
        $input = new InputText('nickname');
        $labelled = new LabelDecorator($input);
        $labelled->setLabel('Nick:');
        echo $labelled . "<br/>\n";

        $input = new InputText('nickname');
        $error = new ErrorDecorator($input);
        $error->setError('You must enter a unique nickname');
        echo $error . "<br/>\n";

        $input = new InputText('nickname');
        $labelled = new LabelDecorator($input);
        $labelled->setLabel('Nick:');
        $error = new ErrorDecorator($labelled);
        $error->setError('You must enter a unique nickname');
        echo $error;
    }
}