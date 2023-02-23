<!--- 
git status // para ver si registro los cambio
git add . // para agregar los archivos
git commit -m "mensaje" // mensaje del commit
git push -u origin main // PARA SUBIR LOS CAMBIOS
git log // para ver cambios realizados en el proyecto

--->

<?php
    include('admin/conexion.php');



    $product = mysqli_query($conn,"SELECT p.name, p.precio, b.brand from product p left join brand b on b.id = p.brand_id ");



?>                                                         

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUNTO CELULAR</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="producto">
        <?php while ($resultado = mysqli_fetch_assoc($product)) : ?>
            <div class="prod">
                <p>producto:   <?php echo $resultado['name']?></p>
                <p>precio:   <?php echo $resultado['precio']?></p>
                <p>marca:   <?php echo $resultado['brand']?></p>
            </div>
        <?php endwhile ?>
    </div>

    <div>
        <h1>gOLA</h1>
    </div>



</body>
</html>