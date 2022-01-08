
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacion</title>
</head>
<body>
<?php 

include("conexion.php");
$dato;
 $nombre=$_POST["nombreUsuario"];
 $correo=$_POST["email"];
 $pass=$_POST["pass"];

/*funciones*/
funcion estaVacio($dato){
  if(empty($dato)){
    echo"error";
  }
}

 /*login/ inicio de sesion */
  if(isset($_POST["btnInicio"])){
      $query=mysqli_query($conexion, "SELECT * FROM login WHERE usuario='$nombre' AND password='$pass'");
      /*busca en la tabla login */
        $numr=mysqli_num_rows($query);
        if($numr==1){
          header("location:index.html");/*la pagina a donde va a ir  */
        }
        else{
          header("location:iniciarSesion.html");/*la pagina a donde va a ir  */
        }
  }
    /*registro */

    if(isset($_POST["btnRegistrate"])){
      $sqlregistra="INSERT INTO login (usuario,correo,password) values ($nombre,$correo,$pass)";
    if(mysqli_query($conexion, $sqlregistra)){
      header("location:index.html");/*la pagina a donde va a ir  */
    }
    else{
      header("location:registro.html");/*la pagina a donde va a ir  */
         }
    }
?>
</body>
</html>