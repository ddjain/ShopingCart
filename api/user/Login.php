<?php

require '../dbconfig.php';
$uname=$_REQUEST['uname'];
$password=$_REQUEST['password'];


$query="select uname,password from users where uname='$uname' AND password='$password'";

$result=mysqli_query($con, $query) or die("-1");

$count = mysqli_num_rows($result);

if($count==1){
echo "valid user";
}
else{
echo "Invalid USER";
}

?>