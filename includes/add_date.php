<?php
require_once "connection.php";

$form_region = ($_POST['region'])-1;
$form_courier = ($_POST['courier']-1);
$form_date_from = ($_POST['date_from']);
//получаем кол-во дней для региона
$result_day_way=$link->query("SELECT day_way FROM region WHERE `id`='$form_region'");
$kk=0;
while ($row_day_way=mysqli_fetch_array($result_day_way)) {
    $day_way=$row_day_way[0];
}
//получаем название региона
$result_region=$link->query("SELECT region FROM region WHERE `id`='$form_region'");
while ($row_region=mysqli_fetch_array($result_region)) {
    $region=$row_region[0];
}
//Получаем имя курьера
$result_courier=$link->query("SELECT fio FROM courier WHERE `id`='$form_courier' ");
while ($row_courier=mysqli_fetch_array($result_courier)){
$courier=$row_courier[0];
}

$form_date_in_print=date('Y-m-d',strtotime($form_date_from. '+ '.$day_way.' day'));
$day_way=$day_way*2;
$form_date_in=date('Y-m-d',strtotime($form_date_from. '+ '.$day_way.' day'));

//проверка занят ли курьер в это время
$result1=$link->query("SELECT * FROM `timetable` WHERE `fio`='$courier' AND `date_from`>= '$form_date_from' AND `date_from`<= '$form_date_in'");
$result2=$link->query("SELECT * FROM `timetable` WHERE `fio`='$courier' AND `date_in`>= '$form_date_from' AND `date_in`<= '$form_date_in'");
$result3=$link->query("SELECT * FROM `timetable` WHERE `fio`='$courier' AND `date_from`>= '$form_date_from' AND `date_in`<= '$form_date_in'");
$result4=$link->query("SELECT * FROM `timetable` WHERE `fio`='$courier' AND `date_from`<= '$form_date_from' AND `date_in`>= '$form_date_in'");

if ($result1->num_rows>0 || $result2->num_rows>0 || $result3->num_rows>0 || $result4->num_rows>0) {
        echo "Данный курьер занят в это время";
        return false;
    } else {
        //если не занят добавляем в расписание
        $sresult=$link->query(
        "INSERT INTO `timetable` VALUES (NULL,'$region','$courier','$form_date_from','$form_date_in')"
        );
        echo mysqli_error($link);
        if ($sresult===true) {
            echo "Дoбавлено. Дата прибытия $form_date_in_print ";
        } else {
            echo 'Ошибка';
        }

        return true;
    }




?>
