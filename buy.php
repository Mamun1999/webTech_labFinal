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
    include("connect.php")
    ?>


<h1 class="text-center">Your booked item</h1>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">

                <thead>
                    <tr>

                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">model</th>
                        <th scope="col">price</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                    

                    $sql = "Select * from booked_car  ";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['car_id'];
                            $name = $row['car_name'];
                            $model = $row['car_brand'];
                            $price = $row['price'];

                            echo  ' <tr>
          <th scope="row">' . $id . '</th>
          <td scope="row">' . $name . '</td>
          <td scope="row">' . $model . '</td>
          <td scope="row">' . $price . '</td>
          <td>
       
  
        
  
         </td>
          
      
          </tr>';
                        }
                    }

                    ?>




                </tbody>
            </table>
        </div>
    </div>

</body>

</html>