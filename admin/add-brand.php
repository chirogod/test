<?php
include('conexion.php');

if(isset($_POST['post'])){
    include('conexion.php');
    $brand = $_POST['brand'];
    $query = "INSERT INTO brand(brand) VALUES ('$brand')";

    if(mysqli_query($conn, $query)){
        echo "BRAND ADDED CORRECTLY";
    }else{
        echo "BRAND NOT ADDED" . mysqli_error($conn);
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD BRAND</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="brand" placeholder="brand">
        <input type="submit" name="post">
    </form>
    
</body>
</html>