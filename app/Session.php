<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function groups(){
        return $this->belongsTo('App\Group');
    }
    protected $hidden = [];
}