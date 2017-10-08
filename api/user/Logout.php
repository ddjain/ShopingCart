<?php
session_start();
unset ( $_SESSION['user'] ) ;
unset ( $_SESSION['uid'] ) ;
unset ( $_SESSION['cart'] ) ;
unset ( $_SESSION['status'] ) ;

header("location:../../");
?>