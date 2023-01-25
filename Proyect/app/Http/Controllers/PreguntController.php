<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunt;
use Hash;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Str;
use Validator;
use Flash;
use Delete;
use Update;

class PreguntController extends Controller
{
    public function index(){
        $tematicas = \DB::table('tematicas')
            ->select('tematicas.*')
            ->orderBy('id', 'ASC')
            ->get();
        
        $preguntas = \DB::table('pregunts')
        ->join('tematicas', 'tematicas.id', '=', 'pregunts.id_tematica')
        ->select('pregunts.id', 'pregunts.descripcion', 'pregunts.respuestaCorrecta', 'tematicas.nombretematica')
        ->orderBy('pregunts.id', 'ASC')
        ->simplePaginate(5);

        return view('administrador/uploadPreguntas')
        ->with('tematicas', $tematicas)
        ->with('preguntas', $preguntas);
    }

    public function create(){
        return view('uploadPreguntas.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'descripcion' => ['required', 'string', 'min:4'],
            'respuestaCorrecta' => ['required', 'string', 'min:4'],
            'respuestaError1' => ['required', 'string', 'min:4'],
            'respuestaError2' => ['required', 'string', 'min:4'],
            'respuestaError3' => ['required', 'string', 'min:4'],
            'id_tematica' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $preguntas = pregunt::create([
                'descripcion' => $request->descripcion,
                'respuestaCorrecta' => $request->respuestaCorrecta,
                'respuestaError1' => $request->respuestaError1,
                'respuestaError2' => $request->respuestaError2,
                'respuestaError3' => $request->respuestaError3,
                'id_tematica' => $request->id_tematica,
            ]);
            return back()
            ->with('mensaje', 'La pregunta a sido subida con exito!');
        }
    }

    public function destroy(pregunt $id){
        $preguntas = pregunt::find($id);
        $preguntas->each->delete();
        
        return back()
        ->with('mensaje', 'La pregunta a sido borrado con exito!');
    }

    public function edit(pregunt $uploadPregunta){
        $tematicas = \DB::table('tematicas')
            ->select('tematicas.*')
            ->orderBy('id', 'ASC')
            ->get();

        return view('administrador/editPreguntas', compact('uploadPregunta', 'tematicas'));
    }

    public function update(Request $request, pregunt $uploadPregunta){
        $validator = Validator::make($request->all(),[
            'descripcion' => ['required', 'string', 'min:4'],
            'respuestaCorrecta' => ['required', 'string', 'min:4'],
            'respuestaError1' => ['required', 'string', 'min:4'],
            'respuestaError2' => ['required', 'string', 'min:4'],
            'respuestaError3' => ['required', 'string', 'min:4'],
            'id_tematica' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $uploadPregunta->update($request->all());
            return redirect()->route('uploadPreguntas.index')
            ->with('mensaje', 'La pregunta a sido editada con exito!');
        }
    }
}
