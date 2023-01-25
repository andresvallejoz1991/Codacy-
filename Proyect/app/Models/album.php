<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class album extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nombreAlbum',
    ];

    protected $hidden = [
        //
    ];

    protected $casts = [
        //
    ];

    public function albumUsuario(){
        return $this->hasMany('App\Models\AlbumUsuario');
    }

}
