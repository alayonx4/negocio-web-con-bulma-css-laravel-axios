<?php
  require_once 'header.php';
  
  if (isset($_SESSION['user']))
  {
   destroySession();
   echo "<br><div class='center'>you have been logged out. please
        <a data-transition='slide' href='index.php'>click here</a>
        to refresh the screen.</div>";
}
 else echo "<div class='center'>no puede cerrar sesión porque no ha iniciado sesión</div>";
?>
      
     </div>
   </body>
  </html>
