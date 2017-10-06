<?php

require '../dbconfig.php';

$uname=$_REQUEST['uname'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];
$mobile=$_REQUEST['mobile'];

$query="insert into users (`uname`, `password`, `address`, `mobile`) value('$uname','$password','$address','$mobile')";
$result=mysqli_query($con, $query);
echo mysqli_error($con)."<br>";
echo mysqli_errno($con);
echo "1";

?>