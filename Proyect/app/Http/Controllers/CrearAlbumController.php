<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Auth;
use App\Models\User;

class CrearAlbumController extends Controller
{
    public function index()
    {
        $albums = \DB::table('albums')
            ->select('albums.id', 'albums.nombreAlbum')
            ->orderBy('albums.id', 'ASC')
            ->whereNotExists(function($query)
                {
                    $usuario = \Auth::user()->id;
                    
                    $query->select(\DB::raw(1))
                          ->from('album_usuarios')
                          ->whereRaw('albums.id = album_usuarios.id_album')
                          ->whereRaw('album_usuarios.id_usuario ='.$usuario);
                })
            ->get();
            
        return view('/usuario/obtenerAlbum')
        ->with('albums', $albums);
    }
            
}
