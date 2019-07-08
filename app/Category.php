<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [      
        'id',
        'category'
        
    ];

    public function gigs(){
        
        return $this->hasMany('App\Gig'); 
     }

     public function getRouteKeyName(){
        
        return 'category'; 
     }


}
