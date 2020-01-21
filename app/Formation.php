<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table='formations';
    protected $fillable = [
        'titre', 'annee','etablissement'
       ];
       public function cv()
       {
        return $this->belongsTo('App\Cv');
       }
}
