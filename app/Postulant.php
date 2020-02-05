<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulant extends Model
{
    protected $fillable = [
        
    ];
    public function candidat()
    {
        return $this->belongsTo('App\User');
    }
    public function offre()
    {
        return $this->belongsTo('App\Offre');
    }

}
