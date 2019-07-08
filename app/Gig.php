<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use Laravel\Scout\Searchable;



class Gig extends Model
{
    protected $table = 'gigs';

    protected $fillable = [      
        'user_id',
        'title',
        'category_id',
        'description',
        'price',
        'image_name',
    ];

    use Searchable;


    public function category()
    {
        return $this->belongsto('\App\Category');
    }

    public function scopeSearch($query, $search){

        return $query->where('title','like','%' .$search. '%')
                    ->orWhere('description','like','%' .$search. '%');

    }

    public function searchableAs()
    {
        return 'gigs';
    }
}
