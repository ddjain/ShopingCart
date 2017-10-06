<?php

require '../dbconfig.php';
class Categories{
	public $cid="";
	public $cname="";
}
$products=array();
$arr=array();
$query="select * from category ";
$result=mysqli_query($con, $query) or die("0");
while($row=mysqli_fetch_assoc($result))
{
	$p=new Categories();
	$p->cid=$row['cid'];
	$p->cname=$row['cname'];
array_push($arr,$p);
	}
echo json_encode($arr);

?>