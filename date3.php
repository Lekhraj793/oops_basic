<?php

function dateRange($begin, $end, $interval = null)
{
    $begin = new DateTime($begin);
    $end = new DateTime($end);
   
    $end = $end->modify('+1 day');
    $interval = new DateInterval($interval ? $interval : 'P1D');

    return iterator_to_array(new DatePeriod($begin, $interval, $end));
}

$dates = dateRange('2018-04-09', '2018-05-23');

$weekends = array_filter($dates, function ($date) {
    $day = $date->format("N");
    return $day === '6' || $day === '7';
});

$b=count($weekends);
	echo $b;

foreach ($weekends as $date) {
    $a= $date->format("D Y-m-d") . "<br>";
	echo $a."<br>";
	
	
}

		