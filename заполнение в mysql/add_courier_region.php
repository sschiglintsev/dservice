<?php

$db_host="127.0.0.1";
$db_user="root";
$db_password="";
$db_base="db_ds";
$base_table1="courier";

$link=mysqli_connect($db_host,$db_user,$db_password,$db_base);
// вносим курьеров в таблицу Курьеры
if (!$link) {
    echo "disconnect";
}
$query="INSERT INTO courier VALUES 
  (0,'Криптов Александр Викторович'),
  (1,'Уморов Владислав Олегович'),
  (2,'Петров Петр Петрович'),
  (3,'Копейкин Максим Сергеевич'),
  (4,'Фролов Максим Игоревич'),
  (5,'Филлипов Руслан Федорович'),
  (6,'Скворцов Роман Иванович'),
  (7,'Князев Исак Ньютонович'),
  (8,'Максютов Рустем Юрьевич'),
  (9,'Карамычкин Иван Васильевич')";
$result=mysqli_query($link,$query);
if($result) echo "ok";
// вносим регионы и время в таблицу регионы
$query="INSERT INTO region VALUES 
  (0,'Санкт-Петербург','2'),
  (1,'Уфа','15'),
  (2,'Нижний Новгород','5'),
  (3,'Владимир','4'),
  (4,'Кострома','7'),
  (5,'Екатеренбург','2'),
  (6,'Ковров','8'),
  (7,'Воронеж','5'),
  (8,'Самара','7'),
( 9,'Астрахань','23')";
$result=mysqli_query($link,$query);
if($result) echo "ok";

$rezult=$link->query("SELECT * FROM courier");
mysqli_close($link);
while ($row=mysqli_fetch_array($rezult)) {
    echo $row['id'];
    echo $row['fio'];
}
?>