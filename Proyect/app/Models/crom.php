<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class crom extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'imgCromo',
        'nombreCromo',
        'descripcion',
        'id_tematica',
    ];

    protected $hidden = [
        //
    ];

    protected $casts = [
        //
    ];

    public function tematica(){
        return $this->belongsTo('App\Models\tematica', 'id_tematica');
    }
}
