<?php
require '../dbconfig.php';
$cid=$_REQUEST['cid'];

$query="DELETE FROM `category` WHERE  cid=".$cid;

$result=mysqli_query($con, $query) or die("0");
echo "1";

?>