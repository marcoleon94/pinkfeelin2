<?php
require("menu.php");
require("footer.php");
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel=stylesheet href="css/materialize.min.css">
	<link rel=stylesheet href="css/materialize.css">
  <link rel=stylesheet href="css/main.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
</head>
<body>
<?php menu("registro.php");?>

<div class="page-login">
	<div class="center">
		<div class="card bordered" style="margin:5% auto; max-width:800px; border-radius: 13px;">
			<div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px;">
        <div class="row">	
          <div class="col s1" style="margin-top: 13px;">
              <i class="material-icons medium white-text">mode_edit</i>
          </div>
          <div class="col s11 left-align">
            <h3 style="color:white;">Registrate</h3>
          </div>
        </div>
      </div>
        	
      <div class="card-content">
        <form>
        	<div class="row">

          <div class="input-field col s4">
              <i class="material-icons prefix">account_circle</i>
                <input type="text" id="nombre" class="validate" >
                <label for="nombre" class="left-align">Nombre</label>
            </div>

            <div class="input-field col s8">
              <i class="material-icons prefix">account_circle</i>
                <input type="text" id="apellido" class="validate" >
                <label for="apellido" class="left-align">Apellidos</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix">location_on</i>
                <input type="text" id="direccion" class="validate" >
                <label for="direccion" class="left-align">Direccion</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
                <input type="text" id="email" class="validate" >
                <label for="email" class="left-align">E-mail</label>
            </div>
	        	<div class="input-field col s12">
	        		<i class="material-icons prefix">account_circle</i>
	        			<input type="text" id="usuario" class="validate" >
	        			<label for="usuario" class="left-align">Usuario</label>
	        	</div>

	        	<div class="input-field col s6">
	        		<i class="material-icons prefix">lock</i>
	        		<input type="password" id="contra" class="validate">
	        		<label for="contra" class="left-align" >Contraseña</label>
	        	</div>
            <div class="input-field col s6">
              <i class="material-icons prefix">lock_outline</i>
              <input type="password" id="contrar" class="validate">
              <label for="contrar" class="left-align" >Repetir Contraseña</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">today</i>              
              <input type="date" class="datepicker" id="fecha"> 
              <label for="fecha" class="left-align">Dia de Nacimiento</label>
            </div>


            <div class="input-field col s6">
            <label>Sexo</label><br>
                <p>
                  <input class="with-gap" name="sexo" type="radio" id="hombre" />
                  <label for="hombre">Hombre</label>
                </p>
                <p>
                  <input class="with-gap" name="sexo" type="radio" id="mujer" />
                  <label for="mujer">Mujer</label>
                </p>
              
            </div>
	        				
	        	<button class="btn waves-effect waves-light right" type="submit" name="action" style="margin-top:30px;">Registrar
    					<i class="material-icons right">mode_edit</i>
  					</button>

	        </div>
        </form>
      </div>
		</div>
	</div>
</div>
<?php footer(); ?>



  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script> 
  <script src="js/ui.datepicker-es.js"></script>

  <script>
  $(document).ready(function(){ 
      $('.datepicker').pickadate({
        firstDay: true
    });
  }); 
  </script>
</body>


        

</html>