<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'task',
        'description',
        'date',
        'subject_id'
    ];

    public function task(){
        return $this->belongsTo('App\User', 'subject_id','id');
    }
}