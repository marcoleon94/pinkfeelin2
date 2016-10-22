<?php

namespace pinkfeelin\Models\User;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    protected $table = 'cities';
    protected $primarykey= 'id';
    public $timestamps=false;
    protected $fillable= [
      'nombre', 'id_estado'
    ];
    public function state(){
      return $this->belongsto(State::class)
    }
}
