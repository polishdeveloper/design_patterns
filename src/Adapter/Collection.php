<?php
namespace Adapter;

interface Collection extends \IteratorAggregate {

    public function add($element);

    public function contains($element);

    public function remove($element);
}

?>
