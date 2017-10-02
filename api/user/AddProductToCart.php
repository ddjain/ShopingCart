<?php

session_start();
$pid=$_REQUEST['pid'];
$qty=1;
$flag=0;
if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=array();	
	echo count($_SESSION['cart']);
}

for ($i = 0; $i <count( $_SESSION['cart']); $i++) {
	$cpid=$_SESSION['cart'][$i];
	$i++;
	
	if($pid === $cpid){
		$qty1=$_SESSION['cart'][$i];
		$_SESSION['cart'][$i]=$qty1+$qty;
	    echo"Product +1... Total Product=".$_SESSION['cart'][$i];
		$flag=1;
		break;
	}
}

if($flag==1){
	//echo  "product already present in cart<br>";
}
else{
	
	$_SESSION['cart'][count($_SESSION['cart'])]=$pid;
	$_SESSION['cart'][count($_SESSION['cart'])]=$qty;	
	echo "Product=1";
}

//	echo "<a href=arr1.php> click me</a><br>";
//Code For showing product in cart	
	/*echo"<table border=1>";
	echo "<th>Product Id</th><th>Qunatity</th>";
	for ($i = 0; $i <count( $_SESSION['cart']); $i++) {
		echo "<tr>";
		echo "<td>".$_SESSION['cart'][$i]."</td><td>".$_SESSION['cart'][$i+1]."</td>" ;
		$i++;
		echo "</tr>";
	}*/
?>