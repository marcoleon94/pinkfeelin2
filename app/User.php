<?php

namespace pinkfeelin;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellido','telefono','tipo','sexo','fecha_nac'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
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
