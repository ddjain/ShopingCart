<?php
session_start();
if($_REQUEST['uname']=="admin" && $_REQUEST['password']=="admin"){
	
	$_SESSION['admin']=0;
	header("Location:../../Admin/home.php");
}
else{
	header("Location:../../Admin/index.php?msg=Invalid username or password");
}
?>