<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Margaret Automotores - Autos usados en Río Ceballos/Salsipuedes Córdoba</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header">
        <div class="contenido-header">
            <div class="izq">
                <a href="/index.php">
                <img src="/src/img/logo.png" alt="logo margaret automotores" class="logo">
                </a>
                <div class="menu">
                    <div class="mobile-menu">
                        <img src="/src/img/barras.svg" alt="barras-menu">
                    </div>
                    <nav class="navegacion">
                        <a href="/index.php" class="nav-enlace">Inicio</a>
                        <a href="/vehiculos.php" class="nav-enlace">Vehículos</a>
                        <a href="/pagos.php" class="nav-enlace">Métodos de pago</a>
                        <a href="/contacto.php" class="nav-enlace">Contacto</a>
                    </nav>
                </div>


            </div>
            <div class="der">
                <a href="" class="ubicacion">
                    <i class="fa-solid fa-location-dot"></i>
                    Estamos en Sierras Chicas, Córdoba</a>
                <a href="" class="btn1 login"><i class="fa-solid fa-circle-user"></i>Ingresar</a>
            </div>
        </div>
    </header>

    <!-- POPUP LOGIN -->
<div class="popup-overlay" id="popup">
  <div class="popup">
    <h3>Iniciar sesión</h3>
    <form>
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" name="usuario" placeholder="Tu usuario">

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" placeholder="Tu contraseña">

      <button type="button" class="btn-popup">Ingresar</button>
    </form>
  </div>
</div>