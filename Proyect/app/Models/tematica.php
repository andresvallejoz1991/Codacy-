<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\Notifiable;

class tematica extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'imgTematica',
        'nombretematica',
        'id_album'
    ];

    protected $hidden = [
    ];

    protected $casts = [
        //
    ];

    public function crom(){
        return $this->hasMany('App\Models\crom');
    }

    public function pregunt(){
        return $this->hasMany('App\Models\pregunt');
    }
    public function album(){
        return $this->belongsTo('App\Models\album', 'id_album');
    }
    
    protected $table = 'tematicas';
    protected $primaryKey = "id";
}
