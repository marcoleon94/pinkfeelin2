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
    <title>Atención al Cliente</title>
 </head>
 <style>
     
     h5 {
        font-style: italic;
        text-shadow: -1px -1px 1px #000;
        font-size: 27px;
        }

    h4 {
        font-style: italic;
    
        }
 </style>
 <body>
    <div class="menu">
        <?php menu("atencion.php"); ?>
    </div>
      <div class="container">
         <div class="center">
            <h2>Atencion al Cliente</h2>
           <div class="divider"></div> 
          <!--Segunda Sección-->
            <div class="row" style="margin:4%; text-align:left;">
                <div class="col s12">
                    <div class="card bordered" style="margin:5% auto; border-radius: 13px;">
                        <div class="card-header" style="background-color: #f48fb1; color: white; border-top-left-radius: 13px; border-top-right-radius: 13px; padding-left: 10px;">
                            <div class="row">
                                <div class="col s12 left-align">
                                    <h4>Conócenos</h4>
                                </div>
                            </div> 
                        </div>
                
                        <div class="card-content"> 

                              <div class="slider">
                                <ul class="slides">
                                  <li>
                                    <img src="images/mision.jpg"> <!-- random image -->
                                    <div class="caption left-align">
                                      <h1 class="light grey-text text-lighten-5">Misión</h1>
                                      <h5 class="light grey-text text-lighten-5">El grupo empresarial UAA a través de su empresa Pink Feelin' desarrolla prendas de ropa fashion de una calidad media cumpliendo las expectativas del cliente y aún excelente precio para las mujeres jóvenes y adultos. Nuestras tiendas se encuentran en la ciudad de Aguascalientes. Con una colección nueva cada dos semanas por nuestro excelente manejo en la parte logística de nuestra cadena de almacenes para así mantener a nuestros clientes frescos en el mundo de la moda.</h5>
                                    </div>
                                  </li>
                                  <li>
                                    <img src="images/vision1.png"> <!-- random image -->
                                    <div class="caption left-align">
                                      <h1 class="light grey-text text-lighten-5">Visión</h1>
                                      <h5 class="light grey-text text-lighten-5">Ser una empresa líder en la comercialización y distribución de prendas de vestir que puedan llegar a cualquier zona donde exista un nicho de clientes, para que puedan obtener los diferentes diseños y modas.</h5>
                                    </div>
                                  </li>
                                  <li>
                                    <img src="images/privacidad.jpg"> <!-- random image -->
                                    <div class="caption left-align">
                                      <h1 class="light grey-text text-lighten-5">Política de Privacidad</h1>
                                      <h5 class="light grey-text text-lighten-5">1. Cada vez que usa este sitio web estará bajo la aplicación de la política de privacidad y cookies vigente en cada momento (en adelante, la Política de Privacidad y Cookies), debiendo revisar dicho texto para comprobar que está conforme con él.
                                      2. Los datos personales que nos aporta son nombre, apellidos, teléfono, correo electrónico, país, asunto, tema, mensaje, secciones que le interesan y tipo de teléfono móvil que tiene serán objeto de tratamiento en una base de datos responsabilidad de ITX México XXI, S.A. de C.V. (ITX México) cuyas finalidades son de uso exclusivo para la empresa y no serán compartidas con ningún otra empresa.</h5>
                                    </div>
                                  </li>
                                  <li>
                                    <img src="images/devolucion.jpg"> <!-- random image -->
                                    <div class="caption left-align">
                                      <h1 class="light grey-text text-lighten-5">Atención al Cliente Política de Devolución y Reembolso</h1>
                                      <h5 class="light grey-text text-lighten-5">Las prendas tienen que estar en perfecto estado y con su correspondiente ticket. No se podrán devolver ni cambiar los artículos de ropa interior, excepto los de la sección de bebé tallados de 0 a 36 meses. Ten en cuenta que antes de solicitar un reembolso, debes haber recibido la mercancía.
                                      El plazo para cualquier devolución es de 1 mes a partir del email de confirmación de envío.
                                      Tras aprobar la devolución (los artículos tienen que estar en perfecto estado y tener las etiquetas interiores) recibirás un email de confirmación indicándote que el importe se abonará en tu cuenta en unos días.
                                      Pink Feelin' se reserva el derecho de rechazar devoluciones comunicadas o enviadas fuera del plazo fijado, o prendas que no se encuentren en las mismas condiciones en las que fueron recibidas.</h5>
                                    </div>
                                  </li>
                                </ul>
                              </div>
      
                         </div>
                    </div>
                </div> 
                  
                


                
            </div>
        </div>
    </div> 

    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>

    <div class="footer">
        <?php footer(); ?>
    </div>
    <script>
        $( document ).ready(function(){
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
            $('.modal-trigger').leanModal();
            $('.slider').slider({
                interval:10000,
                height: 700

            });
        });
        
    </script>
 </body>
</html>