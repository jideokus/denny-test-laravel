<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'name','location','date','user_id',
    ];
    protected $dates = [
        'date',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
