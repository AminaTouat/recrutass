<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'titre', 'annee','etablissement'
       ];
       public function cv()
       {
        return $this->belongsTo('App\Cv');
       }
}
