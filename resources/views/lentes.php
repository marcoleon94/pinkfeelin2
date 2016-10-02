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
     <?php menu("lentes.php");?>
     <div class="container">
         <div class="center">
            <h2>Lentes</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row" style="margin:4%;">
                 <?php for($x=1;$x<=9;$x++){ ?>
                 <div class="col s4 m4">
                    <div class="card">
                        <div class="card-image">
                          <a href="articulo.php"><img class="responsirve-img" src="images/lentes.jpg"></a>
                          <span class="card-title"><?php echo "Lentes $x"; ?></span>
                        </div>
                        <div class="card-content pink lighten-2">
                          <p>Lentes obscuros.
                              Café.</p>
                            <?php if($x%3==0) {?>
                                <p style="text-decoration:line-through;">$450 MNX.</p>
                                <p>$200</p>
                            <?php } else{ ?>
                                <p>$300</p>
                            <?php } ?>
                        </div>
                        <div class="card-action pink darken-4">
                          <?php if($x%3==0){?>
                            <a href="#">Añadir a tu carrito<span class="new badge" data-badge-caption="Oferta"></span></a>
                            <?php }else{ ?>
                          <a href="#">Añadir a tu carrito</a>
                            <?php } ?>
                        </div>
                      </div>
                 </div> 
                 <?php } ?>
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
        });
        
    </script>
 </body>
</html>