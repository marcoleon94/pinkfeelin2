@if (Session::has('compra'))
  <div class="row">
  <div class="card">
      
        <span class="card-title amber-text text-darken-1"><p><strong>{{Session::get('compra')}}</strong></p></span>

    </div>
  </div>

@endif
