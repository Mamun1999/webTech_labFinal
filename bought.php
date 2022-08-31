<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    



<?php



  include('connect.php'); 
  $id=$_GET['updateid'];
  $sql="Select * from car_info where id=$id ";

  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  
    $name=$row['car_name'];
    $model=$row['car_model'];
    $price=$row['price'];
    
  


$id=$_GET['updateid'];

    if(isset($_POST['update'])){
        $name=$row['car_name'];
        $model=$row['car_model'];
        $price=$row['price'];



        // $sql="Update users set id='$id',
        // name='$name', home='$home' where id=$id";
        // $result=mysqli_query($conn, $sql);

        $sql="Insert into booked_car(car_name,car_brand,price) values('$name','$model','$price')";
        $result=mysqli_query($conn, $sql);


        if($result){
           
             header('location:buy.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>

<h1 style="text-align: center;">Your item</h1>
    <div class="container my-5">
        <form  method="POST">
            <div class="mb-3">
                <label class="form-label"> Car Name</label>
                <input type="text" name="name"value="<?php echo $name?>"  class="form-control" >

            </div>

            <div class="mb-3">
            <label class="form-label"> Car Model</label>
            <input type="text" name="model" value="<?php echo $model?>"  class="form-control" id="name">
            </div>
            <div class="mb-3">
            <label class="form-label"> Car Price</label>
            <input type="text" name="price" value="<?php echo $price?>"  class="form-control" id="name">
            </div>


            <div>
            <button type="submit" name="update" class="btn btn-primary">Buy</button>
            </div>
        </form>
    </div>

    </div>
</body>
</html>