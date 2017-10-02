<?php
$pid=$_REQUEST['pid'];

$con=mysqli_connect("localhost","root","","shopingcard");
$query="delete from product where pid=$pid";

$result=mysqli_query($con, $query) or die("0");
echo "1";

?>