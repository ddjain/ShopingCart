<?php
session_start();
class products{
	public $pid="";
	public $qty=0;
}
$pid=$_REQUEST['pid'];
$p=new products();
$arr=array();
	if(!isset($_SESSION['cart'])){
		$p->pid=$pid;
		$p->qty=1;		
		array_push($arr,$p);
		$_SESSION['cart']=$arr;
	}
	else{
		$found=0;
		$arr=array();
		$arr=$_SESSION['cart'];
		//if product already found, increament qty by one
				for($i=0;$i<count($arr);$i++)
				{
					$p=$arr[$i];
					if($p->pid==$pid){
						echo "product already exsist";
						$found=1;
						$p->qty=($p->qty)+1;
						break;
					}
					
				}
		
		
		//end
		
		
		if($found==0){	
		$p->pid=$pid;
		$p->qty=($p->qty)+1;
		array_push($arr,$p);
		}
		
		$_SESSION['cart']=$arr;
		
		echo "new product added!!!";
	}

?>