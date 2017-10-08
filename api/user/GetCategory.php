<?php
require '../dbconfig.php';
$cid=$_REQUEST['cid'];
$query="SELECT * FROM `category` where cid=$cid";
$result=mysqli_query($con, $query) or die("0");
if($row=mysqli_fetch_assoc($result))
{
	echo $row['cname'];
}
?>