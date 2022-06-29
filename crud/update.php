<?php
include 'config.php';

$id=$_GET['id'];

$dataFetchQuery="SELECT * FROM `product` WHERE id='$id'";
$record=mysqli_query($conn,$dataFetchQuery);
$data=mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title>Product Update</title>
<script src="img.js"></script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <form action="updateAction.php" method="post" enctype="multipart/form-data">
                <div class="mb-3"> <h4>Update Product</h4></div>
                <div class="mb-3"> 
                   Product name:
                    <input type="text"class="form-control" name="name" value="<?php echo $data['name'] ?>">
                </div>
                <div class="mb-3"> 
                  Price:
                    <input type="text"class="form-control" name="price" value="<?php echo $data['price'] ?>">
                </div>
                <div class="mb-3"> 
                    Image:
                    <input id="photo" type="file"class="form-control" name="image" value="<?php echo $data['image'] ?>" required>
                    <div class="mb-3">
                        <img id="imgPreview" src="<?php echo $data['image'] ?>" alt="Image" width="100px"> 
                        <input type="hidden" name="id" value="<?php echo $data['id']?>" >
                            
                    </div >
                </div>
            
                <button type="Register" class="btn btn-dark col-12">Update</button>
            </form>
        </div>
    </div>


 </div>
 <script>
            $(document).ready(() => {
                $("#photo").change(function () {
                    const file = this.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function (event) {
                            $("#imgPreview")
                              .attr("src", event.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            });
        </script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>