<?php 
session_start();
if(isset($_SESSION['cart'])){
	 $arr=array();
	 $arr=$_SESSION['cart'];
	 echo "".count($arr)/2; 
}
else{
		echo "0";
}
?>