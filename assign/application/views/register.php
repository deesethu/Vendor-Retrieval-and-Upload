<?php

include "config.php";
$db = dbConnect();

$name = $_POST["name"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$stn = $_POST["stn"];
$tper = $_POST["tper"];

mysql_query("INSERT INTO vendorinfo VALUES('".$name."','".$pwd."','".$mobile."','".$email."','".$stn."','".$tper."')",$db);

//echo "INSERT INTO vendorinfo VALUES('".$name."','".$pwd."','".$mobile."','".$email."','".$stn."','".$tper."')";

header("Location:home.php");

 ?>