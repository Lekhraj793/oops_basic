<?php
$date = '2003-09-01';
$end = '2003-09-'.date('t', strtotime($date));

     while(strtotime($date) <= strtotime($end)) {
        $day_num = date('d', strtotime($date));
        $day_name = date('l', strtotime($date));
        $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        echo "<td>$day_num <br/> $day_name</td>";
    }