<?php

namespace pinkfeelin\Models\User;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = 'address';
    protected $primarykey= 'id';
    public $timestamps=false;
    protected $fillable= [
      'id_estado','id_ciudad','colonia','calle','numero','cp','id_usuario'
    ];

    public function user(){
      return $this->belongsto(User::class);
    }
    public function state(){
      return $this->belongsto(State::class);
    }
    public function city(){
      return $this->belongsto(City::class);
    }
}
