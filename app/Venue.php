<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
        'name', 'address', 'capacity', 'price'
    ];

    public function venue(){
        return $this->belongsTo('App\Venue');
    }
}