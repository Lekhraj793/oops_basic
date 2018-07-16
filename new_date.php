<?php

$min=3;
$max= 20;

$weekend= 1;
$black_out="'22/01/2018','18/11/2018'";

$a= explode(",", $black_out);

$minimum_date= date('Y-m-d', strtotime("+$min days"));
$maximum_date= date('Y-m-d', strtotime("+$max days +$weekend days"));

foreach($a as $bk)
{
	if(strtotime($bk) > strtotime($minimum_date))
	{		
		$b=count($bk);
		$newmin=  date('Y-m-d', strtotime("$minimum_date +$b days"));
		echo $newmin."<br>";
	}
	else
	{
		$b=count($bk);
		$newmax= date('Y-m-d', strtotime("$maximum_date +$b days"));
		echo $newmax."<br>";
	}
}

echo "<hr>";
echo $minimum_date."<br>";
echo $maximum_date."<br>";

========================================================================================================================================================================================================
<?php
//Define out start and end dates
$start = new DateTime('2011-01-01');
$end = new DateTime('2011-02-01');
//Define our holidays
//New Years Day
//Martin Luther King Day
$holidays = array(
	'2011-01-01',
	'2011-01-17',
);
//Create a DatePeriod with date intervals of 1 day between start and end dates
$period = new DatePeriod( $start, new DateInterval( 'P1D' ), $end );
//Holds valid DateTime objects of valid dates
$days = array();
//iterate over the period by day
foreach( $period as $day )
{
        //If the day of the week is not a weekend
	$dayOfWeek = $day->format( 'N' );
	if( $dayOfWeek < 6 ){
                //If the day of the week is not a pre-defined holiday
		$format = $day->format( 'Y-m-d' );
		if( false === in_array( $format, $holidays ) ){
                        //Add the valid day to our days array
                        //This could also just be a counter if that is all that is necessary
			$days[] = $day;
		}
	}
}

echo "<pre>";
print_r($days);
var_dump( count( $days ) );