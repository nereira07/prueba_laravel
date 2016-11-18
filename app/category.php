<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $table="categories";
    protected $fillable=['name'];
    
//relacion de uno a muchos: 1 categoria tiene muchos articulos** 
    public function articles (){
        return $this->hasMany('App\article');
    }
}
