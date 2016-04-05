<?php

function convert_timestamp($time){
    return date('F j, Y \a\t g:ia', $time);
}

function convert_bytes($size) {
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

function convert_timediff($date1, $date2 = NULL, $verbose = FALSE){
    if ($date2 == NULL) $date2 = time();

    $diff = abs($date1 - $date2);

    $units = array('year'   => 31556952,
                   'month'  => 2628000,
                   'week'   => 604800,
                   'day'    => 86400,
                   'hour'   => 3600,
                   'minute' => 60,
                   'second' => 1);

    $output = '';

    foreach ($units as $unit => $seconds){
        $multiplier = floor($diff / $seconds);

        if ($multiplier > 0){
            $diff -= ($multiplier * $seconds);

            if ($multiplier > 1) $unit .= 's';

            if ($verbose == FALSE) return $multiplier . ' ' . $unit;

            $output .= $multiplier . ' ' . $unit . ' ';
        }
    }

    return trim($output);
}

?>
