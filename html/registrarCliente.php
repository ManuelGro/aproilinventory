<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APROIL</title>
  <link rel="stylesheet" type="text/css" href="../css/registrarClient.css">
</head>
<body>
  <?php include('../php/menu.php'); ?>
  <div class="contenedor">
    <div class="chill-1">
      <h1>Registro de clientes</h1>
      <div class="formulario">
        <form method="POST" action="">
          <label for="nombre"></label>
          <input type="text" name="nombre" id="nombre" placeholder="Nombre del cliente">
          <label for="direccion"></label>
          <input type="text" name="direccion" id="direccion" placeholder="Dirección del cliente"><br>
          <label for="rfc"></label>
          <input type="text" name="rfc" id="rfc" placeholder="RFC del cliente">
          <label for="telefono"></label>
          <input type="text" name="telefono" id="telefono" placeholder="Escriba el teléfono del cliente">
          <label for="correo"></label>
          <input type="text" name="correo" id="correo" placeholder="Escriba el correo del cliente">
          <label for="caracteristicas"></label>
        </form>
      </div>
    </div>
    <div class="chill-2">
      <?php
        include('../conn.php');
        $sql = "SELECT * FROM productos";
        echo "<h1>PRODUCTOS REGISTRADOS</h1>";
        echo "<table>
                <tr>
                  <th>ID</th>
                  <th>PRODUCTO</th>
                  <th>DESCRIPCIÓN</th>
                </tr>";
        if($result = $conn->query($sql)) {
          while ($row = $result->fetch_assoc()){
            $id = $row["id_producto"];
            $producto = $row["nombre"];
            $descripcion = $row["caracteristicas"];
            echo "
              <tr>
                <td>$id</td>
                <td>$producto</td>
                <td>$descripcion</td>
              </tr>
            ";
          }
          $result->free();
          $conn->close();
        }
        echo "</table>";
      ?>
    </div>
  </div>
</body>
</html>