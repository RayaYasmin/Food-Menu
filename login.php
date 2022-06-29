<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title>Login</title>
<style>
    form{
        background:#42e3d8;
        padding:15px;
        border-radius: 10px;
        box-shadow:0px 0px 10px 0px;
    }
    
</style>


</head>
<body>
 <div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="loginAction.php" method="post">
                <div class="mb-3"> <h4>Login Form</h4></div>
                <div class="mb-3"> 
                    Username:
                    <input type="text"class="form-control" name="l_username">
                </div>
                <div class="mb-3"> 
                   Password:
                    <input type="text"class="form-control" name="l_pass">
                </div>
                <button type="Register" class="btn btn-dark col-12">Login</button>
                <br>Not Registered? <a href="register.php">Register here</a>
            </form>
        </div>
    </div>


 </div>





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>