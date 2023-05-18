<?php

include("conexion.php");

$nombre = $_POST["usuario"];
$pass   = $_POST["pass"];

//login
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' AND password='$pass'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
        echo "<script> alert('Bienvenido $nombre');window.location='principal.html'</script>";
    }else
    {
        echo "<script> alert('Usuario no existe');window.location='Iniciar_sesion.php'</script>";

    }
}

//registrar
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')"; 

    if(mysqli_query($conn,$sqlgrabar))
    {
        echo "<script> alert('Usuario registrado con exito:$nombre');window.location='Iniciar_sesion.php' </script>";
    }else
    {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}


?>