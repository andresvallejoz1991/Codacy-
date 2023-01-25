<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\album;
use App\Models\User;

class album_usuario extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_album',
        'id_usuario'
    ];

    protected $hidden = [
        //
    ];

    protected $casts = [
        //
    ];

    public function album(){
        return $this->belongsTo('App\Models\album', 'id_album');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'id_usuario');
    }
}
