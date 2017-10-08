<?php
session_start();

require '../dbconfig.php';

	$flag=0;
	$uname=$_REQUEST['uname'];
	$password=$_REQUEST['password'];
	$query="select uname,password,uid from users where uname='$uname' AND password='$password'";
	$result=mysqli_query($con, $query) or die("-1");
	//$count = mysqli_num_rows($result);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$dbuname=$row['uname'];
		$dbpass=$row['password'];
		
		if($dbuname == $uname && $dbpass== $password){
			
			$_SESSION['user']=$_REQUEST['uname'];
			$_SESSION['uid']=$row['uid'];
			$flag=1;
		}
		
		
	}
	
	if($flag==1){
			header("location:../../");
	}
	else{
		header("location:../../login.php?msg=Invalid User or password");
		
	}
	

?>