<?php
include("n413connect.php");
$sql = "SELECT item, image FROM `n413_list`";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
    echo '<img src="'.$row["image"].'" style="height:75px;margin-right:20px;" />'.$row["item"].'<br/>';
}
