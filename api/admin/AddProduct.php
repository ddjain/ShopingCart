<?php

require '../dbconfig.php';
$pcid=$_REQUEST['pcid'];
$pname=$_REQUEST['pname'];
$pprice=$_REQUEST['pprice'];
$pavailable=$_REQUEST['pavailable'];
$pdes=$_REQUEST['pdes'];
$pdis=$_REQUEST['pdis'];
$img=$_REQUEST['img'];
echo "$pcid   $pname   $pprice   $pavailable   $pdes   $pdis   $img";
$query="insert into product (cid,pname,pprice,pavailable,pdescription,discount,image) values ($pcid,'$pname','$pprice','$pavailable','$pdes',$pdis,'$img')";

$result=mysqli_query($con, $query) ;

echo mysqli_error($con);

echo "1";

?>