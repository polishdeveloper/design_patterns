<?php

class CountableObjectComparator implements Comparator {

    public function compare($a, $b) {
        $acount = count($a);
        $bcount = count($b);
        return $acount < $bcount ? -1 : ($acount == $bcount ? 0 : 1);
    }

}

?>
