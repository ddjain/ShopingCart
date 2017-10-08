<?php
session_start();
require '../dbconfig.php';

if(isset($_SESSION['user'])){

class Product{
	public $pid="";
	public $pname="";
	public $pprice="";
	public $qty="";
	public $img="";
	public $ptotal="";
	public $discount="";
}

		//Obtaining Transaction ID
		$query="select max(tid) as cnt from transaction";
		$result=mysqli_query($con, $query) or die("0");
				if($row=mysqli_fetch_assoc($result))
				{
					$tid=$row['cnt'];			
					$tid=$tid+1;
					
				}
				echo $tid;
				$_SESSION['tid']=tid;
				
		//TID obtained
		echo "<table border=1> <tr> <th>tid</th><th>uid</th><th>pid</th><th>qty</th> <th>date</th></tr>";
				for ($i = 0; $i <count( $_SESSION['cart']); $i++) {
							
							$uid=$_SESSION['uid'];
							$pid=$_SESSION['cart'][$i];
							$qty=$_SESSION['cart'][$i+1];
							$d=date("Y-d-m");
							$query1="INSERT INTO `transaction`(`tid`, `pid`, `uid`, `qty`, `tdate`) VALUES ($tid,$pid,$uid,$qty,sysdate())";
							mysqli_query($con, $query1) or die("0");
							echo "<tr>";
								echo"<td>$tid</td>";
								echo"<td>$uid<td>";
								echo"<td>$pid<td>";
								echo"<td>$qty<td>";
							    echo"<td>".date("y-m-d")."<td>";
								echo "</tr>";
								$i++;
							
				}
	$_SESSION['Status']=1;
	header("location:../../ShowInvoice.php");
}
else{
	
	header("location:../../login.php?msg=Please Login To Continue");
}

?>