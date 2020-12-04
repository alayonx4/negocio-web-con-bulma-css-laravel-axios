<?php
require_once "header.php";
?>
<html lang ="en">
    <head>
        <meta charset ="UTF-8">
        <meta name ="viewport" content="width-device-width, initial-scale-1.0">
        <title>games x4</title>
        <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
        <script src="node_modules/axios/dist/axios.min.js"></script>
    </head>
      <body>
        
          <div class="box">
             <div class="columns is-centered is-2">
                  <div class = "column is-half">
                     <div class= "notificacion is-link">
                        <h1>logueate para iniciar a comprar </h1>
                        </div> 
                        <form action= "login.php" method="post">

                          <span class="hidden" data-region="loading-icon-container">
                            <span class="loading-icon icon-no-margin">
                            
                            </span>
                        
                              <div class="field">                              
                                   <label class="label" for="usuarios">Usuario</label>
                                   <input class="input" type="text" id="usuarios" name="usuarios">
                               </div>    
                     
                               <div class="field">
                                <label class="label" for="password">Password</label>
                                <input class="input" type="password" id="password" name="password">
                            </div>    

                            <div class= "field">
                            <div class="control">
                              <input class="button" type="submit" value="Enviar"onclick="login()">
                          </div>    
                        </div>

                       </form>

                    </div>
                  </div>
                </div>
          <!-- Left empty for spacing -->
          esto esta en beta
<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">de parte de</label>
  </div>
  <div class="field-body">
    <div class="field">
      <p class="control is-expanded has-icons-left">
        <input class="input" type="text" placeholder="Name">
        <span class="icon is-small is-left">
          <i class="fas fa-user"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control is-expanded has-icons-left has-icons-right">
        <input class="input is-success" type="email" placeholder="Email" value="alex@smith.com">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fas fa-check"></i>
        </span>
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label"></div>
  <div class="field-body">
    <div class="field is-expanded">
      <div class="field has-addons">
        <p class="control">
          <a class="button is-static">
            numero
          </a>
        </p>
        <p class="control is-expanded">
          <input class="input" type="tel" placeholder="Your phone number">
        </p>
      </div>
      <p class="help">solo ingresa numeros</p>
    </div>
  </div>
</div>
<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Subject</label>
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity">
      </div>
      <p class="help is-danger">
       el campo es requerido
      </p>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
    <label class="label">Question</label>
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
      </div>
    </div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label">
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
      <input class="button" type="submit" value="Enviar"onclick="login()">
       
        </button>
      </div>
    </div>
  </div>
</div>
          <!-- Left empty for spacing -->
              <script>   
               
             function login(){

        axios.post(`api/funcion.php/login/${document.forms[0].usuarios.value}`, {
        usuarios: document.forms[0].usuarios.value,
        password: document.forms[0].password.value,
       }).then(resp => {
         if (resp.data.aceptado){
             alert(`bienvenido: ${resp.data.nombreperfil}`)
             setTimeout(`location.href='inicio.php?idusuarios=${
                 resp.data.idusuarios}'`,500)
         } else {
             alert(`el usuario y/o contraseña esta incorrecto\n
             verifique e intenten de nuevo.`)
         }

       })axios.catch(error => {
         console.log(error)
       })
    }
    </script>
</body>
</html>