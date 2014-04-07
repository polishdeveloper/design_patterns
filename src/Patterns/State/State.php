<?php
namespace State;

interface State {

    public function parse($input);

    public function valid();
}

?>
