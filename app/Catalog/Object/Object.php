<?php

namespace App\Catalog\Object;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    protected $fillable = [
        'name' , 'description', 'location', 'sub_location',
        'category', 'tag', 'url_image', 'user_id'
    ];
}
