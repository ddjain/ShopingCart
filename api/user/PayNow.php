<?php
require '../dbconfig.php';
class Product{
	public $pid="";
	public $pname="";
	public $pprice="";
	public $qty="";
	public $ptotal="";
	
}
$uid=5;
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
					$pid=$row['pid'];
					
					
						$query='INSERT INTO `transaction`( `pid`, `uid`, `qty`, `tdate`) VALUES ($pid,$uid,$qty,date("Y/m/d"))';
					$result=mysqli_query($con, $query) or die("0");
				}
		$i++;
		
	}
	
?>
