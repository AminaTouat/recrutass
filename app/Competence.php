<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = [
        'titre', 'pourcentage'
       ];
       public function cv()
       {
        return $this->belongsTo('App\Cv');
       }
}
