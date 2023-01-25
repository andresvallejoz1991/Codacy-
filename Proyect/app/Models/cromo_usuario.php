<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\crom;
use App\Models\album_usuario;

class cromo_usuario extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_albumUsuario',
        'id_cromos'
    ];

    protected $hidden = [
        //
    ];

    protected $casts = [
        //
    ];

    public function croms(){
        return $this->belongsTo('App\Models\crom', 'id_cromos');
    }

    public function album_usuarios(){
        return $this->belongsTo('App\Models\album_usuario', 'id_albumUsuario');
    }

    protected $table = 'cromos_usuarios';
    protected $primaryKey = "id";

}
