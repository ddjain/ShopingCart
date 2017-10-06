<?php

require '../dbconfig.php';
class Product{
	public $pid="";
	public $cid="";
	public $pname="";
	public $pprice="";
	public $pavailable="";
	public $pdescription="";
}

$pid=$_REQUEST['pid'];

//$con=mysqli_connect("localhost","root","","shopingcard");

$query="select * from product where pid=$pid";
$result=mysqli_query($con, $query) or die("0");
if($row=mysqli_fetch_assoc($result))
{
	$p=new Product();
	$p->pid=$row['pid'];
	$p->cid=$row['cid'];
	$p->pname=$row['pname'];
	$p->pprice=$row['pprice'];
	$p->pavailable=$row['pavailable'];
	$p->pdescription=$row['pdescription'];
}
echo json_encode($p);

?>