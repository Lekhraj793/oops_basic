<?php

function getWDays($startDate,$holiday,$wDays) {

    // using + weekdays excludes weekends
    $new_date = date('Y-m-d', strtotime("{$startDate} +{$wDays} weekdays"));

    $holiday_ts = strtotime($holiday);

    // if holiday falls between start date and new date, then account for it
    if ($holiday_ts >= strtotime($startDate) && $holiday_ts <= strtotime($new_date)) {

        // check if the holiday falls on a working day
        $h = date('w', $holiday_ts);
            if ($h != 0 && $h != 6 ) {
            // holiday falls on a working day, add an extra working day
            $new_date = date('Y-m-d', strtotime("{$new_date} + 1 weekdays"));
        }
    }

    return $new_date;
}

// here is an example
$start = "2018-04-29";
$holiday = "2018-05-02";
$wDays = 3;

echo "Start: ",date("Y-m-d D", strtotime($start)),"<br />";
echo "Holiday: ",date("Y-m-d D", strtotime($holiday)),"<br />";
echo "WDays: $wDays<br />";

echo getWDays($start, $holiday, $wDays);



echo "<hr>";



$blck_out= array('12/04/2018','13/11/2018');
$weekend=2;

$c= count($blck_out);


$min= 4;
$max= 20;

$a= date('Y-m-d', strtotime("+$min days"));

$b= date('Y-m-d', strtotime("+$c days +$max days"));

echo $a." to ".$b;