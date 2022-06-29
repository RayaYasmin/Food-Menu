<?php
include 'config.php';
$r_username=$_POST['r_username'];
$r_pass=$_POST['r_pass'];
$r_con_pass=$_POST['r_con_pass'];
$r_email=$_POST['r_email'];
$r_mobile=$_POST['r_mobile'];

$r_username_pattern="/[A-Za-z.]{3,20}/";
$r_mobile_pattern="/(\+88)?-?01[3-9]\d{8}/";
$r_email_pattern= "/(cse|eee|law)_\d{10}@lus.ac.bd/";
$r_pass_pattern="/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

$dublicate_username=mysqli_query($conn,"SELECT * FROM `register` WHERE username='$r_username'");
if(mysqli_num_rows($dublicate_username)>0){
    echo"<script>alert('Username already taken')</script>";
    echo"<script>location.href='register.php'</script>";

}
else if(!preg_match($r_username_pattern,$r_username)){

    echo"<script>alert('Invalid username!')</script>";
    echo"<script>location.href='register.php'</script>";
}
else if(!preg_match($r_mobile_pattern,$r_mobile)){
    echo"<script>alert('Invalid mobile number!')</script>";
    echo"<script>location.href='register.php'</script>";
}
else if(!preg_match($r_email_pattern,$r_email)){
    echo"<script>alert('Invalid email!')</script>";
}
else if(!preg_match($r_pass_pattern,$r_pass)){
    echo"<script>alert('Minimum 8 characters, at least 1 letter, 1 number and 1 special character')</script>";
    echo"<script>location.href='register.php'</script>";
}
else if($r_pass !== $r_con_pass){
    echo"<script>alert('Password is not matching')</script>";
    echo"<script>location.href='register.php'</script>";
}
else{
    $insert_query = "INSERT INTO `register`( `username`, `pass`, `email`, `mobile`) VALUES ('$r_username','$r_pass','$r_email','$r_mobile')";
    if(!mysqli_query($conn,$insert_query)){
        echo"<script>alert('Data is not inserted')</script>";
    }
    else{
        echo"<script>alert('Data inserted')</script>";
        echo"<script>location.href='login.php'</script>";
    }
}


