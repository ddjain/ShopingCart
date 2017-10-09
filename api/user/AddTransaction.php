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
				$_SESSION['transaction']=$tid;
				
		//TID obtained
		echo "<table border=1> <tr> <th>tid</th><th>uid</th><th>pid</th><th>qty</th> <th>date</th></tr>";
				for ($i = 0; $i <count( $_SESSION['cart']); $i++) {
							
							$uid=$_SESSION['uid'];
							$pid=$_SESSION['cart'][$i];
							$qty=$_SESSION['cart'][$i+1];
							$d=date("Y-d-m");
							
							
							//update available product from main database
							$query3="select * from product where pid=$pid";
							echo $query3."<br>";
							$result3=mysqli_query($con,$query3);
							if($row3=mysqli_fetch_assoc($result3)){
								$available=$row3['pavailable'];
								$pname=$row3['pname'];
								
							}
							echo "QTY : $qty    Available:$available <br>";
							if($qty>$available){
									echo "not available";	
								//header("location:../../cart.php?msg=not enough stock for $pid");
							}
										$query1="INSERT INTO `transaction`(`tid`, `pid`, `uid`, `qty`, `tdate`) VALUES ($tid,$pid,$uid,$qty,sysdate())";
										mysqli_query($con, $query1) or die("0");
							
							
						
								$i++;
							
				}
	$_SESSION['Status']=1;
	//header("location:../../ShowInvoice.php");
}
else{
	
	//header("location:../../login.php?msg=Please Login To Continue");
}

?>