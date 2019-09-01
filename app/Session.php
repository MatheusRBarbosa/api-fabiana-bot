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
        'date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function groups(){
        return $this->belongsTo(Group::class);
    }
    protected $hidden = [];
}