<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HolidayHouse extends Model
{
    
    protected $fillable = [
        'name', 'location_id', 'numberOfRooms','numberOfBeds','type_id',
    ];  
    public function singleRow($postId)
{
    return $details->votes()->where('post_id', $postId)->count() > 0;
}
}
