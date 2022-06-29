<?php
include 'config.php';

$pname=$_POST['name'];
$pprice=$_POST['price'];
$pimage=$_FILES['image'];

$imageLocation=$pimage['tmp_name'];
$imageName=$pimage['name'];
$imageDestination="image/".$imageName;

move_uploaded_file($imageLocation,$imageDestination);


$insertProductQuery="INSERT INTO `product`( `name`, `price`, `image`) VALUES ('$pname','$pprice','$imageDestination')";
if(!mysqli_query($conn,$insertProductQuery)){
    
    echo"<script>alert('Product is not inserted')</script>";
    echo"<script>location.href='index.php'</script>";
}
else{
   // echo"<script>alert('Product is inserted')</script>";
    echo"<script>location.href='index.php'</script>";
}




