<?php
use Illuminate\Database\Capsule\Manager as DB;
require_once "header.php";
require "vendor\autoload.php";
require "config\database.php";

$user=DB::table('usuarios')
    ->leftjoin('perfiles','usuarios.idperfiles', '=', 'perfiles.idperfiles')
    ->where('usuarios.nombreusuario',$_POST['usuario'])
    ->first();

if(!isset($_SESSION["maestro"]) and !isset($_SESSION["alumno"]))
{
 echo <<<_LOGIN1

 NO puedes estar aqui
_LOGIN1;
}
{
    if(isset($_SESSION["alumno"]))
    {
     
    echo <<<_LOGGED2

    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="buttons">
          <a class="button is-dark" href="logout.php">
             <strong>Log out</strong>
          </a>
        </nav>
_LOGGED2;
     }
     else 
     {
        $nombre_de_usuario=$_SESSION["maestro"];
 
   echo <<<_LOGGED1

    <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="buttons">
          <a class="button is-dark" href="logout.php">
             <strong>Log out</strong>
          </a>
          <a class="button is-dark" href="insertar.php">
          <strong>Insertar calificación</strong>
       </a>
       <a class="button is-dark" href="erasecal1.php">
       <strong>eliminar calificación</strong>
    </a>
    </nav>
          
    <section class="hero">
    <div class="hero-head">
      
        <h1 class="title">
        sesion iniciada como: 
        </h1>
        <h2 class="subtitle">
         -$nombre_de_usuario-
        </h2>
      </div>
  </section>
_LOGGED1;
     }
}