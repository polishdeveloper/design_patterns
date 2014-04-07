<?php
namespace Builder;

interface TreeBuilder {

    /**
     * Resets the tree (removes all changes)
     */
    function reset();

    /**
     * Add values to tree
     * @param array $values
     */
    function addValues(array $values);

    /**
     * Returns built tree
     * @return Tree
     */
    function getTree();
}

?>
