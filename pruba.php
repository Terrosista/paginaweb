<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="pagina.css">
</head>

<body>
  <header>
    <h2 class="logo">logo</h2>

    <nav class="datos">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Servicio</a>
      <a href="#">Contacto</a>
      <button class="boton">iniciar</button>
    </nav>

  </header>
  <div class="wrapper">
    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="from-box login">
      <h2>login</h2>
      <form method="POST" action="inviciar.php">
        <div class="input">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="mail" name="mail" id="mail" required>
          <label for="mail">Email</label>
        </div>
        <div class="input">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" name="password" maxlength="11" id="password" required>
          <label for="password">Password</label>
     </div>
     
        <div class="remeber">
          <label>
            <input type="checkbox">
            remember me
          </label>
          <a href="#">Forgot your password?</a>
        </div>
    
        <button type="submit" class="btn">login</button>
        <div class="login-register">
          <p>Don't have an account?
            <a href="#" class="register-link">Register</a>
          </p>
        </div>
      </form>
    </div>


    <div class="from-box registra">
      <h2>Register</h2>
      <form method="POST" action="conexion.php">
        <div class="input">
          <span class="icon"><ion-icon name="person"></ion-icon></span>
          <input type="text" name="user" id="user" required>
          <label for="user">Username</label>
        </div>

        <div class="input">
             <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="mail" name="mail" id="mail" required>
         <label for="mail">Email</label>
                </div>


        <div class="input">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" name="password" maxlength="11" id="password" required>
          <label for="password">Password</label>
        </div>

        <div class="remeber">
          <label>
            <input type="checkbox">
            Agree to the terms & condition
          </label>
          <a href="#">Forgot your password?</a>
        </div>
        <button type="submit" class="btn">register</button>
        <div class="login-register">
          <p>Already have an account?
            <a href="#" class="login-link">Login</a>
          </p>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
  <script src="script.js"></script>
</body>

</html>
