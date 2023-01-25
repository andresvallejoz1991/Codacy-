<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\album_usuario;
use App\Models\User;
use Validator;
use App\Http\Controllers\Auth;
use Flash;
use Delete;
use Update;
use App\Http\Requests\UserRequest;

class AlbumUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = \Auth::user()->id;

        $albumes = \DB::table('album_usuarios')
            ->join('albums', 'album_usuarios.id_album', '=', 'albums.id')
            ->select('albums.id', 'albums.nombreAlbum')
            ->where('album_usuarios.id_usuario', '=', $usuario)
            ->orderBy('albums.id', 'ASC')
            ->get();

        return view('usuario/mostrarAlbum')
        ->with('albumes', $albumes);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id_album' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $usuario = \Auth::user()->id;

            $albumUser = album_usuario::create([
                'id_album' => $request->id_album,
                'id_usuario' => $usuario
            ]);

            return redirect()->route('mostrarAlbum.index')
            ->with('mensaje', 'Has obtenido el álbum con exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = \Auth::user()->id;

        $albumes = \DB::table('album_usuarios')
            ->join('albums', 'album_usuarios.id_album', '=', 'albums.id')
            ->select('albums.id', 'albums.nombreAlbum')
            ->where('album_usuarios.id_usuario', '=', $usuario)
            ->where('albums.id', '=', $id)
            ->orderBy('albums.id', 'ASC')
            ->get();

        /*Cromos*/
        $croms = \DB::table('cromos_usuarios')
            ->join('croms', 'cromos_usuarios.id_cromos', '=', 'croms.id')
            ->join('album_usuarios', 'cromos_usuarios.id_albumUsuario', '=', 'album_usuarios.id')
            ->select('cromos_usuarios.id', 'croms.descripcion', 'croms.imgCromo', 'croms.nombreCromo')
            ->where('album_usuarios.id_usuario', '=', $usuario)
            ->where('album_usuarios.id_album', '=', $id)
            ->groupBy('cromos_usuarios.id_cromos')
            ->simplePaginate(9);

        return view('/usuario/album')
        ->with('croms', $croms)
        ->with('albumes', $albumes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
