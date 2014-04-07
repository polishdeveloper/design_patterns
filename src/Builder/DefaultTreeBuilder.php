<?php
namespace Builder;

class DefaultTreeBuilder implements TreeBuilder {

    private $_tree;

    public function addValues(array $values) {
        foreach ($values as $value) {
            $this->_tree = $this->_addTo($value, $this->_tree);
        }
    }

    private function _addTo($number, Tree $tree = null) {
        if ($tree === null) {
            $tree = new Tree($number);
            return $tree;
        }

        if ($number < $tree->getValue()) {
            $tree->setLeft($this->_addTo($number, $tree->getLeft()));
        } else {
            $tree->setRight($this->_addTo($number, $tree->getRight()));
        }
        return $tree;
    }

    public function getTree() {
        return $this->_tree;
    }

    public function reset() {
        $this->_tree = null;
    }

}

?>
