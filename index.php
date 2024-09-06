<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"
    ></script>
    <link rel="icon" href="img/familia.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    
    <title>Veterinaria - Cliente</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" method="POST" class="sign-in-form">
            <h2 class="title">Iniciar Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="username" name="username" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" name="password" type="password" placeholder="Password" />
            </div>
            <input type="submit" value="INGRESAR" class="btn solid">
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1>Veterinaria</h1>
            <h3>
              Cuidamos a tu mascota como si fuera nuestra.
              Salud y bienestar para tu peludo amigo, ¡ven a conocernos!
            </h3>
          </div>
          <img src="img/persona+mascota7.png" class="image" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
