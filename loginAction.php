<?php
include 'config.php';
$l_username=$_POST['l_username'];
$l_pass=$_POST['l_pass'];
$_result=mysqli_query($conn,"SELECT * FROM `register` WHERE username='$l_username'");
if(mysqli_num_rows($_result)){
    session_start();
    $_SESSION['username']=$l_username;
    echo "<script>location.href='home.php'</script>";
}else{
    echo "<scrip>alert('Incorrect username and password!')'</script>";
    echo "<scrip>location.href='login.php'</script>";
}