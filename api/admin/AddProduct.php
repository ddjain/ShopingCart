<?php

require '../dbconfig.php';
$pcid=$_REQUEST['pcid'];
$pname=$_REQUEST['pname'];

$pprice=$_REQUEST['pprice'];
$pavailable=$_REQUEST['pavailable'];

$pdes=$_REQUEST['pdes'];
$pdis=$_REQUEST['pdis'];


$query="insert into product (cid,pname,pprice,pavailable,pdescription,discount) value ($pcid,'$pname','$pprice','$pavailable','$pdes',$pdis)";

$result=mysqli_query($con, $query) ;

echo mysqli_error($con);

echo "1";

?>