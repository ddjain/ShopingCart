<?php
require '../dbconfig.php';
$cname=$_REQUEST['cname'];
$query="insert into category (cname) value('$cname')";

$result=mysqli_query($con, $query);
echo mysqli_error($con);
?>