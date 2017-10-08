<?php
session_start();
class products{
	public $pid="";
	public $qty="";
}
$p=new products();

$arr=$_SESSION['cart'];
echo json_encode($arr);
?>