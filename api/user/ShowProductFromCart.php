<?php
session_start();
echo"<table border=1>";
echo "<th>Product Id</th><th>Qunatity</th>";
	for ($i = 0; $i <count( $_SESSION['cart']); $i++) {
		echo "<tr>";
		echo "<td>".$_SESSION['cart'][$i]."</td><td>".$_SESSION['cart'][$i+1]."</td>" ;
		$i++;
		echo "</tr>";
	}
?>