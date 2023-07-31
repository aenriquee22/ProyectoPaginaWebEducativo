<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #86FFB2;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpath fill='%236bff73' d='M486 705.8c-109.3-21.8-223.4-32.2-335.3-19.4C99.5 692.1 49 703 0 719.8V800h843.8c-115.9-33.2-230.8-68.1-347.6-92.2C492.8 707.1 489.4 706.5 486 705.8z'/%3E%3Cpath fill='%237eff50' d='M1600 0H0v719.8c49-16.8 99.5-27.8 150.7-33.5c111.9-12.7 226-2.4 335.3 19.4c3.4 0.7 6.8 1.4 10.2 2c116.8 24 231.7 59 347.6 92.2H1600V0z'/%3E%3Cpath fill='%23a9ff36' d='M478.4 581c3.2 0.8 6.4 1.7 9.5 2.5c196.2 52.5 388.7 133.5 593.5 176.6c174.2 36.6 349.5 29.2 518.6-10.2V0H0v574.9c52.3-17.6 106.5-27.7 161.1-30.9C268.4 537.4 375.7 554.2 478.4 581z'/%3E%3Cpath fill='%23e5ff1b' d='M0 0v429.4c55.6-18.4 113.5-27.3 171.4-27.7c102.8-0.8 203.2 22.7 299.3 54.5c3 1 5.9 2 8.9 3c183.6 62 365.7 146.1 562.4 192.1c186.7 43.7 376.3 34.4 557.9-12.6V0H0z'/%3E%3Cpath fill='%23ffcc00' d='M181.8 259.4c98.2 6 191.9 35.2 281.3 72.1c2.8 1.1 5.5 2.3 8.3 3.4c171 71.6 342.7 158.5 531.3 207.7c198.8 51.8 403.4 40.8 597.3-14.8V0H0v283.2C59 263.6 120.6 255.7 181.8 259.4z'/%3E%3Cpath fill='%23deed0c' d='M1600 0H0v136.3c62.3-20.9 127.7-27.5 192.2-19.2c93.6 12.1 180.5 47.7 263.3 89.6c2.6 1.3 5.1 2.6 7.7 3.9c158.4 81.1 319.7 170.9 500.3 223.2c210.5 61 430.8 49 636.6-16.6V0z'/%3E%3Cpath fill='%239adb17' d='M454.9 86.3C600.7 177 751.6 269.3 924.1 325c208.6 67.4 431.3 60.8 637.9-5.3c12.8-4.1 25.4-8.4 38.1-12.9V0H288.1c56 21.3 108.7 50.6 159.7 82C450.2 83.4 452.5 84.9 454.9 86.3z'/%3E%3Cpath fill='%2365ca21' d='M1600 0H498c118.1 85.8 243.5 164.5 386.8 216.2c191.8 69.2 400 74.7 595 21.1c40.8-11.2 81.1-25.2 120.3-41.7V0z'/%3E%3Cpath fill='%233fba2b' d='M1397.5 154.8c47.2-10.6 93.6-25.3 138.6-43.8c21.7-8.9 43-18.8 63.9-29.5V0H643.4c62.9 41.7 129.7 78.2 202.1 107.4C1020.4 178.1 1214.2 196.1 1397.5 154.8z'/%3E%3Cpath fill='%2334AA43' d='M1315.3 72.4c75.3-12.6 148.9-37.1 216.8-72.4h-723C966.8 71 1144.7 101 1315.3 72.4z'/%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color: black;
    font-size: 30px;
    font-weight: bold;


}

.container-form {
    width: 90%;
    height: 90vh;
    display: flex;
    justify-content: space-around;
    transition:  all .5s ease-out;
}

.welcome-back {
    display: flex;
    align-items: center;
    text-align: center;
}

.message {
    padding: 1rem;
}

.message h2 {
    font-size: 1.7rem;
    padding: 1rem 0;
}

.message button {
    padding: 1rem;
    font-weight: 400;
    background-color: #4a4aee;
    border-radius: 2rem;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: .9rem;
    margin-top: 2rem;
    transition: all .3s ease-in;
    color: #fff;
}

.message button:hover {
    background-color: #6464f8;
}

.formulario {
    width: 500px;
    padding: 1rem;
    margin: 2rem;
    background-color: rgb(51, 51, 51, 0.602);
    text-align: center;
}

.create-account {
    padding: 2.7rem 0;
    font-size: 1.7rem;
}


.formulario input {
    width: 70%;
    display: block;
    margin: auto;
    margin-bottom: 2rem;
    background-color: #104d0e;
    border: none;
    border-bottom: white thin solid;
    text-align: center;
    outline: none;
    padding: .2rem 0;
    font-size: .9rem;
    color: white;
}

.formulario input[type="button"] {
    width: 60%;
    margin: auto;
    border: solid thin white;
    padding: .7rem;
    border-radius: 2rem;
    background-color: white;
    font-weight: 600;
    margin-top: 3rem;
    font-size: .8rem;
    cursor: pointer;
    color: #222;
}

.sign-in {
    position: absolute;
    opacity: 0;
    visibility: hidden;
}

.sign-in.active {
    opacity: 1;
    visibility: visible;
}

.sign-up.active {
    opacity: 0;
    visibility: hidden;
}

 form button {
    padding: 15px 60px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #104d0e;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
}
a{
    color: white;
    font-size: 20px;
}


    </style>

    <title>ADMINISTRADOR</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Crear Perfil de Profesor</h2>
                <p>Solo para personas no registradas en el sistema</p>
               
            </div>
        </div>
        <form action="" method="post" class="formulario">
            <h2 class="create-account">Crear una cuenta</h2>

            <input type="text" name="nombre" placeholder="Nombre completo"> <br>
            <input type="text" name="correo" placeholder="Correo Electronico"> <br>
            <input type="text" name="usuario" placeholder="Usuario"> <br>
            <input type="password" name="password" placeholder="Password"> <br>
            <button type="submit" name="enviar">Registrar</button>  <br>
            <a href="interfaz_admin.html">Salir</a>
            <!--<button type="submit" href="registrarperfiles.html">Salir</button> -->

        </form>
    </div>
    <script>
    const $btnSignIn= document.querySelector('.sign-in-btn'),
      $btnSignUp = document.querySelector('.sign-up-btn'),  
      $signUp = document.querySelector('.sign-up'),
      $signIn  = document.querySelector('.sign-in');

    document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
    }
});
    </script>


    <?php
        include("registro_bd_profesore.php");
    ?>
</body>

</html>