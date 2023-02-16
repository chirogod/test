<?php
include('conexion.php');
/******************************************************************** */
/* SELECCIONAMOS LAS MARCAS */
$query = "SELECT * FROM brand";
$brands = mysqli_query($conn, $query);
/* SELECCIONAMOS USUARIO */
$query = "SELECT * FROM user";
$users = mysqli_query($conn, $query); 


if(isset($_POST['cargar'])){
    include('conexion.php');
    $product = $_POST['product'];
    $brand = $_POST['brand'];
    $user = $_POST['user'];
    

    $query = "INSERT INTO product(id,name, brand_id, created_by) values (NULL, '$product', '$brand' , '$user')";
    if (mysqli_query($conn, $query)) { //Se insertó correctamente
        echo  "La propiedad se inserto correctamente";
    } else {
        $mensaje = "No se pudo insertar en la BD" . mysqli_error($conn);
    }
}
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar productos</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" name="product" placeholder="product">
        <select name="brand" id="">
            <option value="" >Brand</option>
            <?php while ($row = mysqli_fetch_assoc($brands)) :?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['brand'] ?></option>
            <?php endwhile ?>
        </select>
        <select name="user" id="">
            <option value="" >User</option>
            <?php while ($row = mysqli_fetch_assoc($users)) :?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['username'] ?></option>
            <?php endwhile ?>
        </select>

        <input type="submit" name="cargar">
    </form>

    <?php if (isset($_POST['cargar'])) : ?>
        <script>
            alert("<?php echo $mensaje ?>");
            window.location.href = 'add-product.php';
        </script>
    <?php endif ?>


</body>
</html>

