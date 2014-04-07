<?php
namespace Mediator;

class Example extends \PatternExample {

    public function execute()
    {
        $input = new InputElement();
        $input->addFilter(new EmptyFilter())
            ->addFilter(new TrimFilter())
            ->addFilter(new HtmlEntitiesFilter());
        $input->setValue('  this is a test of <b>mediator</b> pattern  ');

        echo '[' . $input->getValue() . ']';
    }
}