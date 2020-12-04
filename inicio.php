<?php
use Illuminate\Database\Capsule\Manager as DB; 
require "vendor\autoload.php";
require "config\database.php";
require_once 'header.php';
  
$user=DB::table('usuarios')
->leftjoin('perfiles', 'usuarios.idusuarios', '=', 'usuarios.idusuarios')
->where('usuarios.idusuarios', $_GET['usuarios'])->first();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset= "UTF-8">
        <meta name= "viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema escolar</title>
        <link rel="stylesheet" href= "node_moules\bulma\css\bulma.min.css">
</head>

<body>
    <div class= "continer">
        <h1>sistema escolar</h1>
        <?php if ($user->nombreusuario == 'profesor'){?>
          <h2>agregar calificacion: </h2>
           <form action= "insertar.php" method= "post">}
               <label for="calificacion">calificacion: </label>
               <input id="calificacion" type="text" name="calificacion">
               <input clas= "button" type = "submit" value="guardar">
           </form>
           <?php } ?>

           <form action="consultar.php" method="post">
               <input class="button" type="submit" value="consultar">
        </form>
        </div>
        
        </body>