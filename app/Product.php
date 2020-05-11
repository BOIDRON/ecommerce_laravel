<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Voyager Relationship
    public function categoryId(){
        return $this->belongsTo('App\Category');
    }

    //Get Product Category
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
