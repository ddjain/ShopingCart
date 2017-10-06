<?php

require '../dbconfig.php';
class Product{
	public $pid="";
	public $cid="";
	public $pname="";
	public $pprice="";
	public $pavailable="";
	public $pdescription="";
	public $image="";
}
$cid=$_REQUEST['cid'];
$products=array();


$query="select * from product where cid=$cid";
$result=mysqli_query($con, $query) or die("0");
while($row=mysqli_fetch_assoc($result))
{
	$p=new Product();
	$p->pid=$row['pid'];
	$p->cid=$row['cid'];
	$p->pname=$row['pname'];
	$p->pprice=$row['pprice'];
	$p->pavailable=$row['pavailable'];
	$p->pdescription=$row['pdescription'];
	$p->image=$row['image'];
	array_push($products,$p);
}
echo json_encode($products);
?>