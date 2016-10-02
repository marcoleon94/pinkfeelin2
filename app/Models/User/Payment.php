<?php

namespace pinkfeelin\Models\User;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $table = 'payments';
    protected $primarykey= 'id';
    protected $fillable= [
      'id_usuario','nombre','numero','mes_exp','año_exp','codigo','tipo'
    ];
    public function user(){
      return $this->belongsto(User::class);
    }
}
