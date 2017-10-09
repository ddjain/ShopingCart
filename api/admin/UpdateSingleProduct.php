<?php

require '../dbconfig.php';
$pid=$_REQUEST['pid'];
$pcid=$_REQUEST['pcid'];
$pname=$_REQUEST['pname'];
$pprice=$_REQUEST['pprice'];
$pavailable=$_REQUEST['pavailable'];
$pdes=$_REQUEST['pdes'];
$image=$_REQUEST['img'];
$query="UPDATE `product` SET `cid`=$pcid,`pname`='$pname',`pprice`=$pprice,`pavailable`=$pavailable,`pdescription`='$pdes', image='$image' where pid=$pid ";
$result=mysqli_query($con, $query) or die("0") ;
echo mysqli_error($con);
echo "1";

?>