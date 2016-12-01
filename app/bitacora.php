<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    //
    protected $table="bitacora";
    protected $fillable=['transaccion_realizada', 'fecha_hora_transaccion'];
    
//relacion de uno a muchos: 1 categoria tiene muchos articulos** 
    public function users (){
        return $this->hasMany('App\User');
    }
}
