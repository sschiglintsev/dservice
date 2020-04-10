<?php
require_once "connection.php";
$i=1;
$result=$link->query("SELECT * FROM courier");
while ($row=mysqli_fetch_array($result)) {
    $fio=$row['fio'];
    echo "<option value=$i>" . $row['fio'] . "</option>";
    $i++;
}
