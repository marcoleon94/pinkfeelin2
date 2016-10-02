<?php

namespace pinkfeelin\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $primarykey= 'id';
    protected $fillable= [
      'nombre','precio','tipo','marca','descripcion','stock','imagen'
    ];
    public function contain(){
      return $this->hasmany(Contain::class);
    }
}
