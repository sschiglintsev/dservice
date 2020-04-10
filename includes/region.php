<?php
require_once "connection.php";
$i=1;
$result=$link->query("SELECT * FROM region");
while ($row=mysqli_fetch_array($result)) {
    $reg=$row['region'];
    echo "<option value=$i>".$row['region']."</option>";
    $i++;

}