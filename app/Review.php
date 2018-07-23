<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review', 'star_raiting'
    ];

    protected $hidden = [
        'id', 'user_id', 'property_id'
    ];
    

    public function review(){
        return $this->belongsTo('App\Property');
     }
     
}
