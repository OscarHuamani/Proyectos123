<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximun-scale=1.0, minimum-scale=1.0">
    <title>INICIAR SESION</title>
    <link href="estilos1.css" rel="stylesheet" type="text/css">
</head>
<body >
        
<header style="text-align: center;">
        <div class="logo">
            <img src="logo.png" alt="logo de la compañia" width="60" height="80">
            <h3 style="color: aliceblue;">UNIVERSIDAD NACIONAL DE INGENIERIA<br>
                FACULTAD DE INGENIERIA MECANICA
            </h3>
        </div>
    </header>
       

        <hr class="border">

        <h2 class="titulo">Iniciar Sesion</h2>

    <form action="login_registrar.php" method="POST">
            
                <input class="pepe" type="text" name="usuario" placeholder="&#128273;usuario">
            
                <input class="contraini" type="password" name="pass" placeholder="&#128274;contraseña">
                
                <input type='submit' value="Ingresar" name="btningresar">

    </form>
    <p class="texto-registrate">
        ¿ A un no tienes cuenta ?
        <a href="Registrarme.php">Registrarme</a>
    </p>    
</body>
</html>