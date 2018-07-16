<?php

$min=3;
$max= 20;

$weekend= 1;
$black_out=array("2018/04/15","2018/04/14","2018/04/18","2018/05/02","2018/05/12");

//$a= explode(",", $black_out);

//$minimum_date= date('Y-m-d', strtotime("$min days"));
//$maximum_date= date('Y-m-d', strtotime("$max days"));
$start_date = date('Y-m-d');

$a = 0;
for ($i=0; $i <= 3; $i++) { 
	$newmin=  date('Y-m-d', strtotime("$start_date +$i days"));
	if (isWeekend($newmin)) {
		$a++;
	}

}
$minimum_date= date('Y-m-d', strtotime("$start_date +$a days"));


$b = 0;
for ($j=3; $j <= 24; $j++) { 
	$newmin=  date('Y-m-d', strtotime("$minimum_date +$j days"));
	if (isWeekend($newmin)) {
		$b++;
	}
}

$maximum_date= date('Y-m-d', strtotime("$minimum_date +$b days"));

foreach($black_out as $date)
{
	$bk= strtotime($date);
	
	if($bk <=  strtotime($minimum_date) && isWeekend($newmin))
	{		
		$b=count($bk);
		$newmin=  date('Y-m-d', strtotime("$minimum_date +$b days"));
		echo $newmin.()"<br>";
	}
	elseif($bk <= strtotime($maximum_date))
	{
		$b=count($bk);
		$newmax= date('Y-m-d', strtotime("$maximum_date +$b days"));
		echo $newmax."<br>";
	}
	else
	{
		echo "hello";
	}
}$end = $end->modify('+1 day')

echo "<hr>";
echo $minimum_date."<br>";
echo $maximum_date."<br>";


echo "<hr>";

function isWeekend($date) {
    return (date('N', strtotime($date)) >= 6);
}


// function number_of_working_days($from, $to) {
//     $workingDays = [1, 2, 3, 4, 5];
//     $holidayDays = ["2018-04-18","2018-04-25"]; 
    
//     $from = new DateTime($from);
//     $to = new DateTime($to);
//     $to->modify('+1 day');
//     $interval = new DateInterval('P1D');
//     $periods = new DatePeriod($from, $interval, $to);

//     $days = 0;
//     foreach ($periods as $period) {
//         if (!in_array($period->format('N'), $workingDays)) continue;
//         if (in_array($period->format('Y-m-d'), $holidayDays)) continue;
//         if (in_array($period->format('*-m-d'), $holidayDays)) continue;
//         $days++;
//     }
//     return $days;
// }

// echo number_of_working_days("2018-04-01","2018-04-30");