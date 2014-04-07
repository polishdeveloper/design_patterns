<?php
namespace Adapter;

class Printer {

    public function printAll(Collection $c) {
        foreach ($c as $index => $element) {
            echo $index . " => " . $element . "<br/>";
        }
    }

}

?>
