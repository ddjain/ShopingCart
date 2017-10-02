<?php

$cname=$_REQUEST['cname'];

$con=mysqli_connect("localhost","root","","shopingcard");

$query="insert into category (cname) value('$cname')";

$result=mysqli_query($con, $query);
echo mysqli_error($con);
?>