<?php

include "config.php";
$db = dbConnect();
$oname = $_POST["oname"];
$name = $_POST["name"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$stn = $_POST["stn"];
$tper = $_POST["tper"];

mysql_query("UPDATE vendorinfo SET name='".$name."', pwd='".$pwd."',mobile='".$mobile."',email='".$email."',stn='".$stn."',tper='".$tper."' WHERE name='".$oname."'",$db);

header("Location:home.php");

 ?>