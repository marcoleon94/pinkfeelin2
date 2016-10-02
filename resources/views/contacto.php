<?php 
require("menu.php");
require("footer.php");
?>
<html lang="es">
	<link rel=stylesheet href="css/materialize.css">
	<link rel=stylesheet href="css/main.css">
    <link rel="stylesheet" href="css/objfon.css">
 <head>
    <meta charset="UTF-8">
    <title>Contacto</title>
 </head>
 <body>
    <div class="menu">
        <?php menu("contacto.php"); ?>
    </div>
     <div class="container">
         <div class="center">
            <h2>Contáctanos</h2>
            <div class="divider"></div>
             <!--Segunda Sección-->
             <div class="row" style="margin:4%; text-align:left;">
                <div class="col s4">
                    <div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">   
                                <div class="col s12 left-align">
                                    <h5>Redes Sociales</h5>
                                </div>
                            </div> 
                        </div>
                
                        <div class="card-content" style="padding-left: 30px; padding-right: 30px; height: 350px;">
                                <div class="row"><p>Contáctanos y síguenos en cualquiera de las siguientes redes sociales.</p></div>
                                    <div class="row" > <br> <br> <br>
                                         <a href="https://www.facebook.com/PinkFeelin/"><img class="responsive-img" src="images/facebook.png" height="15%" width="15%"></a>
                                         <a href="https://plus.google.com/"><img class="responsive-img" src="images/googleplus.png" height="15%" width="15%"></a>
                                         <a href="https://es.pinterest.com/"><img class="responsive-img" src="images/pinterest.png" height="15%" width="15%"></a>
                                         <a href="https://www.tumblr.com/"><img class="responsive-img" src="images/tumblr.png" height="15%" width="15%"></a>
                                         <a href="https://twitter.com/"><img class="responsive-img" src="images/twitter.png" height="15%" width="15%"></a>
                                    </div>
                             </div>
                        </div>
                    </div>


                <div class="col s4 ">
                    <div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">   
                                <div class="col s12 left-align">
                                    <h5>Servicio al cliente</h5>
                                </div>
                            </div> 
                        </div>
                
                        <div class="card-content" style="padding-left: 30px; padding-right: 30px; height: 350px;">
                                <div class="row">
                                    <p>Telefono: </p><p>449-192-17-27</p> <br>
                                    <p>Lunes a Viernes: </p><p>8am - 6pm </p><br>
                                    <p>E-mail: </p><p>pinkfeelin@gmail.com</p>
                                </div>
                                <div class="row">
                                    <button data-target="modal3" class="btn modal-trigger" type="submit" name="action" style="margin-top:30px;margin-left: 60px;">Sugerencias
                                        <i class="material-icons right">mode_edit</i>
                                    </button>
                                </div>          
                        </div>
                    </div>
                 </div>


                <div class="col s4 ">
                    <div class="card bordered" style="margin:5% auto; max-width:400px; border-radius: 13px;">
                            <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                                <div class="row">   
                                    <div class="col s12 left-align">
                                        <h5>Direcciones</h5>
                                    </div>
                                </div> 
                            </div>
                    
                            <div class="card-content" style="padding-left: 30px; padding-right: 30px; height: 350px;">
                                    <div class="row">
                                        <p>Local 1: </p><p>Del Carmen 420-422, Colonia del Carmen, Aguascalientes, Ags.</p><br>
                                        <p>Local 2: </p><p>Río Pirules 252, San Pablo, Aguascalientes, Ags.</p><br>
                                        <p>Local 3: </p><p>General José María Arteaga 647, Primavera, Aguascalientes, Ags.</p>
                                    </div>
                            </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card bordered" style=" border-radius: 13px;">
                            <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                                <div class="row">   
                                    <div class="col s12 left-align">
                                        <h5>Localízanos</h5>
                                    </div>
                                </div> 
                            </div>
                    
                            <div class="card-content">
                                    <div id="map" style="width:100%;height:500px"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal" id="modal3">
    <div class="modal-content">
        <div class="page-login">
            <div class="center">
                
                        <div class="row">   
                            <div class="col s2">
                                <i class="material-icons medium" style="color:#f48fb1;">mode_edit</i>
                            </div>
                            <div class="col s10 left-align" style="margin-top:15px; color:#f48fb1;">
                                <h4>Mandanos tus Comentarios</h4>
                            </div>
                        </div> 
                    
                        <form>
                                <div class="row">
                                    <div class="input-field col s12">
                                      <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                      <label for="icon_prefix2">Comentarios</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light right" type="submit" name="action" style="margin-top:30px;">Enviar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                        </form>
            </div>
        </div>
    </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    
    <script>
            function myMap() {
              var myCenter = new google.maps.LatLng(21.8833,-102.3);
              var myCenter1 = new google.maps.LatLng(21.883570,-102.310314);
              var myCenter2 = new google.maps.LatLng(21.890419,-102.285466);
              var mapCanvas = document.getElementById("map");
              var mapProp = {center: myCenter, zoom: 15};
              var map = new google.maps.Map(mapCanvas, mapProp);
              var marker = new google.maps.Marker({position:myCenter, animation: google.maps.Animation.BOUNCE});
              var marker1 = new google.maps.Marker({position:myCenter1, animation: google.maps.Animation.BOUNCE});
              var marker2 = new google.maps.Marker({position:myCenter2, animation: google.maps.Animation.BOUNCE});
              marker.setMap(map);
              marker1.setMap(map);
              marker2.setMap(map);
          }
        </script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyADpZK_84nLc2YEQKAwFyX1__uB_aMqks8" type="text/javascript"></script>



    
    <div class="footer">
        <?php footer(); ?>
    </div>
    <script>
        $( document ).ready(function(){
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
            $('.modal-trigger').leanModal();
        });
        
    </script>
 </body>
</html>