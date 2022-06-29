<?php
session_start();
if(isset($_SESSION['username'])){
    session_unset();
    session_destroy();
    echo "<script>location.href='login.php'</script>";
}else{
    echo "<script>alert('Don't access from url!)</script>";
    echo "<script>location.href='login.php'</script>";
}