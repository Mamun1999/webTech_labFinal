<?php
    include('connect.php')
    ?>


<?php

    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $model=$_POST['model'];
        $price=$_POST['price'];


        $sql="Insert into car_info(car_name,car_model,price) values('$name','$model','$price')";
        $result=mysqli_query($conn, $sql);

        if($result){
            header('location: display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>