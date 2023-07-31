<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login profesor</title>
    
   <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">  -->

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
}

body{
   background-image: url(../images/bg4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

main{
    width: 100%;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
}

.contenedor__todo{
    width: 100%;
    max-width: 800px;
    margin: auto;
    position: relative;
}

.caja__trasera{
    width: 100%;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    background-color: rgba(125, 60, 155, 0.5);

}

.caja__trasera div{
    margin: 100px 40px;
    color: white;
    transition: all 500ms;
}


.caja__trasera div p,
.caja__trasera button{
    margin-top: 30px;
}

.caja__trasera div h3{
    font-weight: 400;
    font-size: 26px;
}

.caja__trasera div p{
    font-size: 16px;
    font-weight: 300;
}

.caja__trasera button{
    padding: 10px 40px;
    border: 2px solid #fff;
    font-size: 14px;
    background: transparent;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
    transition: all 300ms;
}

.caja__trasera button:hover{
    background: #fff;
    color: #46A2FD;
}

/*Formularios*/

.contenedor__login-register{
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 380px;
    position: relative;
    top: -185px;
    left: 10px;

    /*La transicion va despues del codigo JS*/
    transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
}

.contenedor__login-register form{
    width: 100%;
    padding: 80px 20px;
    background: white;
    position: absolute;
    border-radius: 20px;
}

.contenedor__login-register form h2{
    font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
    color: #f39c12;
}

.contenedor__login-register form input{
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    background: #F2F2F2;
    font-size: 16px;
    outline: none;
}

.contenedor__login-register form button{
    padding: 10px 40px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #cb2a7d;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
}




.formulario__login{
    opacity: 1;
    display: block;
}
.formulario__register{
    display: none;
}



@media screen and (max-width: 850px){

    main{
        margin-top: 50px;
    }

    .caja__trasera{
        max-width: 350px;
        height: 300px;
        flex-direction: column;
        margin: auto;
    }

    .caja__trasera div{
        margin: 0px;
        position: absolute;
    }


    /*Formularios*/

    .contenedor__login-register{
        top: -10px;
        left: -5px;
        margin: auto;
    }

    .contenedor__login-register form{
        position: relative;
    }
}



  body {
      margin: 0;
      padding: 0;
    }

    .container {
      width: 100%;
      height: 2cm;
      background-color: #F39C12;
      display: flex;
      align-items: center;
    }
    
    .logo {
      width: 2cm;
      height: 100%;
      background-image: url('logo.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
    }
    
    .title {
      margin-left: 10px;
      font-size: 20px;
    }

     .video-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  overflow: hidden;
}

video {
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  object-fit: cover;
}

    </style>
</head>
<body>
<div class="container">
    <div class="logo"></div>
    <h1 class="title">The Universe Of Physics</h1>
  </div>

  <div class="video-background">
    <video autoplay muted loop>
      <source src="video/video6.mp4" type="video/mp4">
      Tu navegador no admite la etiqueta de video.
    </video>
  </div>
  <br>
  <br>
  <br>
  <br>
        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="validar_profesor.php" method="post" class="formulario__login">
                        <h2>Iniciar Sesión PROFESOR</h2>
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="contrasena" placeholder="Password">
                        <button>Iniciar</button>
                    </form>

                    <!--Register-->
                    <form action="" method="post" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" name="nombre" placeholder="Nombre completo">
                        <input type="text" name="correo" placeholder="Correo Electronico">
                        <input type="text" name="usuario" placeholder="Usuario">
                        <input type="password" name="password" placeholder="Password">

                        <button type="submit" name="enviar">Registrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>

    <?php
        include("registro_bd_profesore.php");
    ?>
</body>
</html>