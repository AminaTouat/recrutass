<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable = [
        'content',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function offre()
    {
        return $this->belongsTo('App\Offre');
    }
}
