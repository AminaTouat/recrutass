<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table='experiences';
    protected $fillable = [
        'titre'
       ];
       public function cv()
       {
        return $this->belongsTo('App\Cv');
       }
}
