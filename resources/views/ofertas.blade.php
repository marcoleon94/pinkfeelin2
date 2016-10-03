@extends('layouts.app')

@section('content')
     <div class="container">
         <div class="center">
            <h2>Ofertas</h2>
            <div class="divider"></div>
             <!-- Primera Sección-->
             <div class="row" style="margin:4%;">
                 <?php for($x=1;$x<=3;$x++){ ?>
                 <div class="col s4 m4">
                    <div class="card">
                        <div class="card-image">
                          <a href="articulo.php"><img class="responsirve-img" src="images/bolsa.jpg"></a>
                          <span class="card-title"><?php echo "Bolsa $x"; ?></span>
                        </div>
                        <div class="card-content pink lighten-2">
                          <p>Bolsa café.
                              Con monedero.</p>
                                <p style="text-decoration:line-through;">$450 MNX.</p>
                               <p>$300</p>
                        </div>
                        <div class="card-action pink darken-4">
                          <a href="#">Añadir a tu carrito<span class="new badge" data-badge-caption="Oferta"></span></a>
                        </div>
                      </div>
                 </div>
                 <?php } ?>
             </div>
         </div>
     </div>
    @endsection
