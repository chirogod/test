<?php
include('conexion.php');


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
    <title>LIST</title>
</head>
<body>

                    
    
</body>
</html>