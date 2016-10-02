<?php

namespace pinkfeelin\Models\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';
    protected $primarykey= 'id';
    protected $fillable= [
      'nombre','apellido','contraseña','telefono','tipo','sexo','correo','fecha_nac'
    ]
    ;

    public function address(){
      return $this->hasmany(Address::class);
    }

    public function payment(){
      return $this->hasmany(Payment::class);
    }
    public function buy(){
      return $this->hasmany(Buy::class);
    }
}
