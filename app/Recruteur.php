<?php

namespace App;
use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

class Recruteur extends Authenticatable
{
    use Notifiable;

    protected $guard = 'recruteur';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function offres(){
        return $this->hasmany('App\Offre');
    }
}