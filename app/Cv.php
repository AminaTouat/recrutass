<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'titre',
    ];
    public function candidat()
    {
        return $this->belongsTo('App\User');
    }
    public function formation()
    {
        return $this->hasMany('App\Formation');
    }
}
