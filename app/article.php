<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class article extends Model
{
    //
   use Sluggable;
   public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    
    protected $table="articles";
    protected $fillable=['title','content','category_id','user_id'];
  //relacion de uno a muchos: 1 categoria tiene muchos articulos** 
    public function category (){
        return $this->belongsTo('App\category');
    }
    public function user (){
        return $this->belongsTo('App\user');
    }
    public function images (){
        return $this->hasMany('App\image');
    }
    public function tags (){
        return $this->belongsToMany('App\tag');
    }
}
