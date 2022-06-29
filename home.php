<?php
session_start();
if(isset($_SESSION['username'])){
   
    echo "<br> <a href='logout.php'><button>Logout</button></a>";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <form action="addcart">
    <div class="container">
        <div class="row">
        <h1 class="text-center bg-warning">Food Menu</h1>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img class ="img-fluid"src="crud/image/burger.jpg" alt="">
                <h1 class="text-center">Price: $2</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img class ="img-fluid"src="crud/image/pizza.jpg" alt="">
                <h1 class="text-center">Price: $3</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 " >
                <img class ="img-fluid "src="crud/image/hamburger.jpg" alt="">
                <h1 class="text-center">Price: $1</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img class ="img-fluid "src="crud/image/coffee.jpg" alt="">
                <h1 class="text-center mt-3">Price: $1</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img class ="img-fluid"src="crud/image/burger.jpg" alt="">
                <h1 class="text-center">Price: $2</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img class ="img-fluid"src="crud/image/pizza.jpg" alt="">
                <h1 class="text-center">Price: $3</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 " >
                <img class ="img-fluid "src="crud/image/hamburger.jpg" alt="">
                <h1 class="text-center">Price: $1</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img class ="img-fluid "src="crud/image/coffee.jpg" alt="">
                <h1 class="text-center mt-3">Price: $1</h1>
                <button class="btn btn-danger d-block m-auto px-5 mb-3">Add to cart</button>
            </div>
        </div>
    
    </div>
    </form>
 











<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>