<?php
namespace Composite;

class Example extends \PatternExample {

    public function execute()
    {
        $div = new Div();
        $div->addChild(new H1('Design Patterns'));
        $div->addChild(new P('Definition...'));
        $sub = new Div();
        $sub->addChild(new P('Classification...'));
        $div->addChild($sub);
        echo $div->render(), "\n";
    }
}