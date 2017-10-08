<?php
session_start();
require '../dbconfig.php';
$uid=$_REQUEST['uid'];

 class User {
      public $name = "";
      public $address  = "";
      public $mobile = "";
 }
$query="select * from users where uid=$uid;";
$result=mysqli_query($con, $query);
$user=array();

if($row=mysqli_fetch_assoc($result)){
	$u=new User();
	$u->name=$row['uname'];
	$u->address=$row['address'];
	$u->mobile=$row['mobile'];
}
echo json_encode($u);

?>