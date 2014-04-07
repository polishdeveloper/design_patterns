<?php
namespace Strategy;

class CountableObjectComparator implements Comparator {

    public function compare($a, $b) {
        $a_count = count($a);
        $b_count = count($b);
        return $a_count < $b_count ? -1 : ($a_count == $b_count ? 0 : 1);
    }

}

?>
