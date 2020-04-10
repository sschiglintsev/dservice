<?php

$db_host="127.0.0.1";
$db_user="root";
$db_password="";
$db_base="db_ds";
$base_table1="courier";

$link=mysqli_connect($db_host,$db_user,$db_password,$db_base);
if (!$link) {
echo "disconnect";
}