<?php
include 'config.php';
$id=$_GET['id'];

$deleteQuery="DELETE FROM `product` WHERE id='$id'";
mysqli_query($conn,$deleteQuery);
header("location:index.php");