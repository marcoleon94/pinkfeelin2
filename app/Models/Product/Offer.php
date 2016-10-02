<?php

namespace pinkfeelin\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table = 'offers';
    protected $primarykey= 'id';
    protected $fillable= [
      'descripcion','descuento','id_producto'
    ];
    public function product(){
      return $this->belongsto(Product::class);
    }
}
