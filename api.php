<?php

$user_necj=$_GET['elem'];

$data = json_decode(file_get_contents('https://api.mercadolibre.com/users/'.$user_necj), true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Api mercado libre</title>
  <link rel="stylesheet" href="estilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">Mercado libre</a></div>
        <ul class="links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="https://www.mercadolibre.com.pe/">Comprar</a></li>
        </ul>
      </div>
      
    </nav>
  </div>
<br><br><br><br><br><br>
  <div align="center">
    <main class="container seccion contenido-centrado texto-entrada"> 
      <h3 align="center">
        Datos
      </h3>
      <br><br>
      <table width="70%" border="1px" align="center">
        <thead align="center">
          <tr align="center">
            <th scope="col">Usuario</th>
            <th scope="col">ID</th>
            <th scope="col">Fecha de registro</th>
            <th scope="col">Puntos</th>
          </tr>
        </thead>

      <tbody> 
        <tr>
          <td scope="row"><?php echo $data["nickname"]?></td>
          <td scope="row"><?php echo $data["id"]?></td>
          <td scope="row"><?php echo $data["registration_date"]?></td>
          <td scope="row"><?php echo $data["points"]?></td>
        </tr>
      </tbody>
      </table>
    </main>
  </div>

</body>
</html>
