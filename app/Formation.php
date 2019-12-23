<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'titre', 'annee','etablissement','description'
       ];
       public function cv() 
{ 
    return $this->hasMany(CV::class); 
}
}
