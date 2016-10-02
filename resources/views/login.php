<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel=stylesheet href="css/materialize.min.css">
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php require('menu.php');?>

<!--<button data-target="modal1" class="btn modal-trigger">modal</button>
<div class="modal" id="modal1">
<div class="modal-content"> -->
<div class="page-login">
	<div class="center">
		<div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
			<div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px;">
           		<div class="row">	
          			<div class="col s2" style="margin-top: 5px;">
              			<i class="material-icons medium white-text">perm_identity</i>
          			</div>
          			<div class="col s10 left-align">
            			<h4>Inicia Sesion</h4>
          			</div>
        		</div> 
        	</div>
        	
        	<div class="card-content">
        		<form>
        		
	        			<div class="row">
	        				<div class="input-field col s12">
	        					<i class="material-icons prefix">account_circle</i>
	        					<input type="text" id="usuario" class="validate" >
	        					<label for="usuario" class="left-align"> Usuario</label>
	        				</div>

	        				<div class="input-field col s12">
	        					<i class="material-icons prefix">lock</i>
	        					<input type="password" id="contra" class="validate">
	        					<label for="contra" class="left-align" ">Contraseña</label>
	        				</div>
	        				
	        				<button class="btn waves-effect waves-red right" type="submit" name="action" style="margin-top:30px;">Iniciar Sesion
    							<i class="material-icons right">input</i>
  							</button>

	        			</div>
        		</form>
        	</div>
		</div>
	</div>
</div>
</div>
</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>

	<script>
  $(document).ready(function(){  
      $('.modal-trigger').leanModal();
  }); 
  </script>

</body>
</html>