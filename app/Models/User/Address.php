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
      'estado','ciudad','colonia','calle','numero','cp','id_usuario'
    ];

    public function user(){
      return $this->belongsto(User::class);
    }
}
