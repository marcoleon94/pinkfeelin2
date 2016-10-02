<?php

namespace pinkfeelin\Models\Buy;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    //
    protected $table = 'buys';
    protected $primarykey= 'id';
    protected $fillable= [
      'id_usuario','importe','timestamp'
    ]
    ;
    public function contain(){
      return $this->hasmany(Contain::class);
    }
    public function user(){
      return $this->belongsto(User::class);
    }
}
