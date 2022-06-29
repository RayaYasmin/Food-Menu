<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title>Product Insert</title>
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
            <form action="productInsert.php" method="post" enctype="multipart/form-data">
                <div class="mb-3"> <h4>Insert Product</h4></div>
                <div class="mb-3"> 
                   Product name:
                    <input type="text"class="form-control" name="name">
                </div>
                <div class="mb-3"> 
                  Price:
                    <input type="text"class="form-control" name="price">
                </div>
                <div class="mb-3"> 
                    Image:
                    <input type="file"class="form-control" name="image">
                </div>
            
                <button type="Register" class="btn btn-dark col-12">Insert</button>
            </form>
        </div>
    </div>


 </div>

<div class="container-fluid mt-3 bg-dark">
 <table class="table">
    <thead class="text-white">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>

</thead>
<tbody class="text-white">
<?php
       include 'config.php';
       $allData= mysqli_query($conn,"SELECT * FROM `product`");
       while($row=mysqli_fetch_array($allData)){
       
    echo "<tr>
      <td>$row[id]</td>
      <td>$row[name]</td>
      <td>$row[price]</td>
      <td><img src='$row[image]' width='100px'></td>
      <td><a class='btn btn-warning text-dark' href='update.php? id=$row[id]'><b>Update<b/></a></td>
      <td><a class='btn  btn-warning text-dark' href='delete.php? id=$row[id]'><b>Delete</b></a></td>
    </tr>";
    
       }
?>
</tbody>
</table>
</div>





<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>