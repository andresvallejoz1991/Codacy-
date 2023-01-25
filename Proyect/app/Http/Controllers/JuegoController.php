<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tematica;
use App\Models\pregunt;
use App\Models\album;
use App\Models\cromo_usuario;
use App\Http\Controllers\Auth;
use App\Models\crom;
use App\Models\album_usuario;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = \Auth::user()->id;

        $tematicas = \DB::table('tematicas')
            ->join('albums', 'albums.id', '=', 'tematicas.id_album')
            ->join('album_usuarios', 'albums.id', '=', 'album_usuarios.id_album')
            ->select('tematicas.id', 'tematicas.imgTematica', 'tematicas.nombretematica', 'albums.nombreAlbum')
            ->where('album_usuarios.id_usuario', '=', $usuario)
            ->orderBy('albums.id', 'ASC')
            ->get();

        return view('usuario/juego')
        ->with('tematicas', $tematicas);
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
        $respuesta = 0;
        $opcion = $request ->input('nPregunta');
        $tematica = $request ->input('valorTematica');

        $usuario = \Auth::user()->id;

        $albumUser = \DB::table('album_usuarios')
            ->join('albums', 'album_usuarios.id_album', '=', 'albums.id')
            ->join('tematicas', 'albums.id', '=', 'tematicas.id_album')
            ->select('album_usuarios.*')
            ->where('album_usuarios.id_usuario', '=', $usuario)
            ->where('tematicas.id', '=', $tematica)
            ->get()
            ->first();

        $albumes = \DB::table('albums')
        ->join('tematicas', 'albums.id', '=', 'tematicas.id_album')
        ->select('albums.id')
        ->where('tematicas.id', '=', $tematica)
        ->get()
        ->first();


        if(! ($request->input('question') == NULL) ) {
            $array = array_values($request->input('question'));
            
            foreach($array as $array2) {
                if( $array2 == "v1") {
                    $respuesta = $respuesta +1;
                }
            }
        }
        
        for($i = 0; $i < $respuesta; $i++){
            $cromos = \DB::table('croms')
            ->join('tematicas', 'croms.id_tematica', '=', 'tematicas.id')
            ->join('albums', 'tematicas.id_album', '=', 'albums.id')
            ->select('croms.*')
            ->where('albums.id', '=', $albumes->id)
            ->orderByRaw("RAND()")
            ->take(1)
            ->get()
            ->first();

            $obtenerCromo = cromo_usuario::create([
                'id_albumUsuario' => $albumUser->id,
                'id_cromos' => $cromos->id
            ]);
        }
        return redirect('/usuario/mostrarAlbum')
        ->with('mensajeCromos', $respuesta);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntas = \DB::table('pregunts')
        ->join('tematicas', 'tematicas.id', '=', 'pregunts.id_tematica')
        ->select('pregunts.id', 'pregunts.descripcion', 'pregunts.respuestaCorrecta', 
            'pregunts.respuestaCorrecta AS opcion1', 'pregunts.respuestaError1 AS opcion2', 'pregunts.respuestaError2 AS opcion3',
            'pregunts.respuestaError3 AS opcion4', 'tematicas.id','tematicas.nombretematica')
        ->where('tematicas.id', '=', $id)
        ->orderByRaw("RAND()")
        ->get();
        
        $tematica = tematica::findOrFail($id);

        return view('usuario/quiz', compact('preguntas', 'tematica'));
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
