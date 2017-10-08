<?php
session_start();
if(isset($_SESSION['user'])){
	
header("location:../../ShowInvoice.php");
}
else
{
	header("location:../../login.php?msg=Please Login To Continue");
}
?>