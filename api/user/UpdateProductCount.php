<?php
$pid=$_REQUEST['pcid'];


$con=mysqli_connect("localhost","root","","shopingcard");


$query="update product set count=count+1 where pid=$pid ";

$result=mysqli_query($con, $query) or die("0");
echo "1";

?>