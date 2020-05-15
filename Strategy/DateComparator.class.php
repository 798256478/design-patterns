<?php
namespace Strategy;

class DateComparator implements ComparatorInterface
{
    public function compare($a, $b)
    {
        $aDate = strtotime($a['date']);
        $bDate = strtotime($b['date']);

        if($aDate == $bDate) {
            return 0;
        } else {
            return $aDate < $bDate ? -1 : 1;
        }
    }
}