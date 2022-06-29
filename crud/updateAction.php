<?php
include 'config.php';
$upName= $_POST['name'];
$upPrice= $_POST['price'];
$id= $_POST['id'];
$upImage= $_FILES['image'];
$imageLocation=$upImage['tmp_name'];
$imageName=$upImage['name'];
$imageDestination="image/".$imageName;

move_uploaded_file($imageLocation,$imageDestination);


$updateQuery="UPDATE `product` SET `name`='$upName',`price`='$upPrice',`image`='$imageDestination' WHERE id='$id' ";
if(!mysqli_query($conn,$updateQuery)){
    
    echo"<script>alert('Product is not updated')</script>";
    echo"<script>location.href='index.php'</script>";
}
else{
   // echo"<script>alert('Product is updated')</script>";
    echo"<script>location.href='index.php'</script>";
}

