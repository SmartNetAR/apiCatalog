<?php
/**
 * @author Leonardo Casales
 * @email leonardo@smartnet.com.ar
 * @create date 2019-03-11 21:01:11
 * @modify date 2019-03-11 21:01:11
 * @desc [description]
 */

namespace App\Catalog\Object;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    protected $fillable = [
        'name' , 'description', 'location', 'sub_location',
        'category', 'tag', 'url_image', 'user_id'
    ];
}
