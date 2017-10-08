<?php
session_start();
unset ( $_SESSION['user'] ) ;
unset ( $_SESSION['uid'] ) ;
unset ( $_SESSION['cart'] ) ;
header("location:../../");
?>