<?php

namespace pinkfeelin\Models\Buy;

use Illuminate\Database\Eloquent\Model;

class Contain extends Model
{
    //
    protected $table = 'contains';
    protected $primarykey= 'id';
    protected $fillable= [
      'id_compra','id_producto','cantidad'
    ];
    public function product(){
      return $this->belongsto(Product::class);
    }
    public function buy(){
      return $this->belongsto(Buy::class);
    }
}
