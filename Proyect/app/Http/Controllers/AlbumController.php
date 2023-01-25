<?php

namespace App\Http\Controllers;
use App\Models\album;
use App\Http\Requests\UserRequest;
use Hash;
use Validator;
use Flash;
use Delete;
use Update;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albumes = \DB::table('albums')
            ->select('albums.*')
            ->orderBy('id', 'ASC')
            ->simplePaginate(2);
            
        return view('administrador/adminAlbum')
        ->with('albumes', $albumes);
    }

    public function create(){
        return view('adminAlbum.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nombreAlbum' => ['required', 'string', 'min:4', 'max:25'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $album = album::create([
                'nombreAlbum' => $request->nombreAlbum,
            ]);
            return back()
            ->with('mensaje', 'El álbum a sido creado con exito!');
        }
    }

    public function edit(album $adminAlbum){
        return view('administrador/editAlbum', compact('adminAlbum'));
    }

    public function update(Request $request, album $adminAlbum){
        $validator = Validator::make($request->all(),[
            'nombreAlbum' => ['required', 'string', 'min:4', 'max:25'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $adminAlbum->update($request->all());
            return redirect()->route('adminAlbum.index')
            ->with('mensaje', 'El álbum a sido editado con exito!');
        }
    }
}
