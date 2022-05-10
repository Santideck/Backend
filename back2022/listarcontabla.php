<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <br>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

    <table border="1">

    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>

    <?php
    // 1) Conexion
    $conexion = mysqli_connect("127.0.0.1", "root", "");

    // 2) Preparar la orden SQL
    // $consulta='SELECT * FROM mercadería';
    //  $consulta="SELECT * FROM `mercadería` WHERE `Tipo de Prenda` LIKE 'Buzo'";
    //  $consulta="SELECT * FROM `mercadería` WHERE `Marca` LIKE 'Nike'";
     $consulta="SELECT * FROM `mercadería` WHERE `Precio` > 500";
    // 3) Ejecutar la orden y obtenemos los registros
    mysqli_select_db($conexion, "tienda"); // esta función la podemos poner acá o debajo de la conexión
    $datos= mysqli_query($conexion, $consulta);
    // 4) Mostrar los datos del registro -
     while ($reg=mysqli_fetch_array($datos)) { ?>

        <tr>

        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['Tipo de Prenda']; ?></td>
        <td><?php echo $reg['Marca']; ?></td>
        <td><?php echo $reg['Talle']; ?></td>
        <td><?php echo $reg['Precio']; ?></td>

        </tr>
    <?php } ?>
  </table>

</body>
</html>
