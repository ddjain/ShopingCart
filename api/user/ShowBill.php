<?php

require '../dbconfig.php';
class Product{
	public $pid="";
	public $pname="";
	public $pprice="";
	public $qty="";
	public $img="";
	public $ptotal="";
	public $discount="";
	
}
$arr=array();
session_start();
	for ($i = 0; $i <count( $_SESSION['cart']); $i++) {
		
		$pid=$_SESSION['cart'][$i];
		$qty=$_SESSION['cart'][$i+1];
		$query="select * from product where pid=$pid";
		
				$result=mysqli_query($con, $query) or die("0");
				while($row=mysqli_fetch_assoc($result))
				{
					$p=new Product();
					$p->pid=$row['pid'];
					$p->pname=$row['pname'];
					$p->pprice=$row['pprice'];
					$p->qty=$qty;
					$p->ptotal=$row['pprice']*$qty;
					$p->discount=$row['discount'];
					$p->img=$row['image'];	
					array_push($arr, $p);	
				}
		$i++;
		
	}
	
		echo json_encode($arr);
?>
