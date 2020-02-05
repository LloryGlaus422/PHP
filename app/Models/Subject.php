<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
    'subjects',
    'human_id'

    ];

    public function subject(){
        return $this->belongsTo('App\User', 'human_id','id');
    }

    
    
}
