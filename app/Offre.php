<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'intitule', 'description', 'Type', 'domaine', 'lieutravail', 'datefin', 'compétence', 'annéeExperience', 'duréemploi', 'url', 'niveau', 'prix', 'recruteur_id'
      ];
 public function user(){
     return $this->belongsTo('App\Recruteur');
 }

 public function recruteur()
    {
        return $this->belongsTo('App\Recruteur');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
