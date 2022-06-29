<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}else{
    //echo"<script>alert('DB Connected')</script>";
}