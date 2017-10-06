<?php

require '../dbconfig.php';
$pid=$_REQUEST['pid'];

$query="delete from product where pid=$pid";

$result=mysqli_query($con, $query) or die("0");
echo "1";

?>