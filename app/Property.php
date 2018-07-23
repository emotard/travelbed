<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_line_address', 'second_line_address', 'post_code', 'price', 'is_sold' 
    ];

    protected $hidden = [
        'id', 'user_id'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function reviews(){
        return $this->hasMany('App\Review');
    }

}
