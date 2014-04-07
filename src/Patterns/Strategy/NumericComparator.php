<?php
namespace Strategy;

class NumericComparator implements Comparator {

    public function compare($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return $a < $b ? -1 : 1;
    }

}

?>
