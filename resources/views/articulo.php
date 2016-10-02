<?php
require('menu.php');
require('footer.php');
?>
<html>
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">
 <head>
   <title>Pink Feelin'</title>
 </head>
 <body>
     <?php menu("vestidos.php"); ?>
     <div class="container">
         <div class="center">
            <h2>Artículo X</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row">
                <div class="col s5" style="margin: 10px;">
                    <img class="responsive-img materialboxed" src="images/vestido.jpg" />
                </div>
                 <div class="col s6">
                  <div class="card bordered pink darken-2 " style=" border-radius: 13px;">
                    <div class="card-content white-text pink lighten-3">
                      <span class="card-title">Vestido X</span>
                      <p>Modelo unitalla. 
                          <br>
                              Vestido negro floreado.
                          <br>
                                $450 MNX.</p>
                        <div class="row">
                            <div class="input-field col s3 push-s4">
                            <select>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <label>Cantidad</label>
                            </div>
                            <div class="col s2 push-s4 ">
                            <p>Disponibles: 4</p>
                            </div>
                          </div>
                    </div>
                    <div class="card-action">
                      <a href="#">Añadir a tu carrito</a>
                    </div>
                  </div>       
                </div>      
             </div>
         </div>
     </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <?php footer(); ?>
    
    <script>
        $( document ).ready(function(){
         $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();
        $('.modal-trigger').leanModal(); 
        $('select').material_select();

        });
        
    </script>
 </body>
</html>