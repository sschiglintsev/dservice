<?php
require_once "./includes/connection.php";

$result_fio=$link->query("SELECT fio FROM courier");
$fio_count=mysqli_num_rows($result_fio);
$ii=0;
while ($row_fio=mysqli_fetch_array($result_fio, MYSQLI_NUM)) {
    $array_fio[$ii]=$row_fio[0];
    $ii++;
}

$result_region=$link->query("SELECT region FROM region");
$region_count=mysqli_num_rows($result_region);
$jj=0;
while ($row_region=mysqli_fetch_array($result_region)) {
    $array_region[$jj]=$row_region[0];
    $jj++;
}

$result_day_way=$link->query("SELECT day_way FROM region");
$kk=0;
while ($row_day_way=mysqli_fetch_array($result_day_way)) {
    $array_day_way[$kk]=$row_day_way[0];
    $kk++;
}

$second_date=date("Y-m-d");
$next_day=date('2019-06-01');

while ($next_day<>$second_date){
    $courier_fio=$array_fio[rand($fio_count-1,1)];
    $r=rand($region_count-1,1);
    $region=$array_region[$r];
    $day_way=$array_day_way[$r]*2;
    $date_in=date('Y-m-d',strtotime($next_day. '+ '.$day_way.' day'));
    $sresult_add=$link->query("SELECT * FROM `timetable` WHERE `fio`='$courier_fio' AND `date_from`<= '$next_day' AND `date_in`>= '$date_in' AND `date_from`<= '$date_in'");
    if ($sresult_add->num_rows>0){
        $next_day= date('Y-m-d',strtotime($next_day. '+ 1 day'));
    }
    else {
        $sresult=$link->query(
            "INSERT INTO `timetable` VALUES (NULL,'$region','$courier_fio','$next_day','$date_in')"
        );
        $next_day= date('Y-m-d',strtotime($next_day. '+ 1 day'));
    }
}

?>