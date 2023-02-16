<?php
include('conexion.php');
/*
function obtenerProductos(){
    include('conexion.php');
    $query = "SELECT p.id, p.name from product p ";
    $result = mysqli_query($conn, $query);
    return $result;
}

$result = obtenerProductos();

function obtenerUsers(){
    include('conexion.php');
    $query = "SELECT u.username from user u";
    $result_user = mysqli_query($conn, $query);
    return $result_user;
}

$result_user = obtenerUsers();
*/

$sql = $conn->query("SELECT p.id, u.username, b.brand, p.name from user u left join product p on u.id = p.created_by left join brand b on p.created_by = b.id");
while ($row = $sql->fetch_array()) {
    echo $row['id']."  |  ".$row['username']."  |  ".$row['name']."  |  ".$row['brand']."<br>"."<br>"."<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                    
    
</body>
</html>