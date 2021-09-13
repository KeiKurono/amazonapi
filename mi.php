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
          <li><a href="mi.php">Inicio</a></li>
          <li><a href="https://www.mercadolibre.com.pe/">Comprar</a></li>
        </ul>
      </div>
      
    </nav>
  </div>

  <div class="dummy-text">
        <main class="container seccion contenido-centrado texto-entrada">

        <h1 class="fw-300 centrar-texto">Busqueda de usuarios mercado libre</h1>
            <br><br>
            <div align="center">
            <form method="get" action="api.php">
            <h3>Numero de usuario:</h3> <br /> 
            <input type="text" placeholder="Ingresa ID" name="elem"/>
            <input type="submit"  value="Buscar"/>
            </form>
            </div>

    </main>
  </div>

</body>
</html>
