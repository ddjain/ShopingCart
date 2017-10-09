<?php
session_start();
unset($_SESSION['admin']);
header("location: ../Admin/index.php?msg=Logout Successfully");

?>