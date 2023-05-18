<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximun-scale=1.0, minimum-scale=1.0">
    <title>Crea una cuenta </title>
    <link href="estilos1.css" rel="stylesheet" type="text/css">

</head>
<body >
    <div class="contenedor">
        <h1 class="Titulo">Registrate</h1>
        <hr class="border">
        <form action="login_registrar.php" method="post">
            
                
                <input class="email_regis" type="text" name="usuario" placeholder="&#128273;usuario">
                <input class="email_regis"  type="passwor" name="pass" placeholder="&#128274;contraseña">
          
                <br>
                <br>
                <br>
                <input class="btnregis"   type='submit' value="Registrar" name="btnregistrar">
        </form>
        <p class="texto.registrate">
            ¿ ya tienes cuenta ?
            <a href="Iniciar_sesion.php">Iniciar Sesion</a>
        </p>
    </div>
</body>
</html>