<?php
namespace Interpreter;

class Example extends \PatternExample {

    public function execute()
    {
        //5(a + 11) where a = 3;

        $expression
            = new Product(new Literal(5),
            new Sum(new Variable('a'), new Literal(11)));


        echo $expression->evaluate(array('a' => 3));
    }
}