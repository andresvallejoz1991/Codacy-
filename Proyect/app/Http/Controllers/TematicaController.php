<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tematica;
use App\Models\album;
use Hash;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Str;
use Validator;
use Flash;
use Delete;
use Update;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class TematicaController extends Controller
{
    public function index(){
        $tematicas = \DB::table('tematicas')
            ->join('albums', 'albums.id', '=', 'tematicas.id_album')
            ->select('tematicas.id', 'tematicas.imgTematica', 'tematicas.nombretematica', 'albums.nombreAlbum')
            ->orderBy('tematicas.id', 'ASC')
            ->simplePaginate(2);

        $albumes = \DB::table('albums')
            ->select('albums.*')
            ->orderBy('id', 'ASC')
            ->get();

        return view('administrador/adminTematicas')
        ->with('tematicas', $tematicas)
        ->with('albumes', $albumes);
    }

    public function create(){
        return view('adminTematicas.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'imgTematica' => ['required', 'image', 'mimes:jpg,png,jpeg,svg','max:10000'],
            'nombretematica' => ['required', 'string', 'min:4', 'max:25'],
            'id_album'=> ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $datos = request()->except('_token');

            if($request->hasFile('imgTematica')){
                $file = $request->file('imgTematica');
                $nameImg = time().$file->getClientOriginalName();

                $datos['imgTematica'] = $request->file('imgTematica')->storeAs('img/imgTematicas', $nameImg, 'public');
            }
            tematica::insert($datos);

            return back()
            ->with('mensaje', 'La temática ha sido creada con exito!');
        }
    }

    public function edit($id){
        $albumes = \DB::table('albums')
            ->select('albums.*')
            ->orderBy('id', 'ASC')
            ->get();
        
        $tematica = tematica::findOrFail($id);

        return view('administrador/editTematicas', compact('tematica', 'albumes'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'imgTematica' => ['', 'image', 'mimes:jpg,png,jpeg,svg','max:10000'],
            'nombretematica' => ['required', 'string', 'min:4', 'max:25'],
            'id_album'=> ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $datos = request()->except('_token', '_method');

            if($request->hasFile('imgTematica')){
                $tematica = tematica::findOrFail($id);
                Storage::delete('public/'.$tematica->imgTematica);

                $file = $request->file('imgTematica');
                $nameImg = time().$file->getClientOriginalName();

                $datos['imgTematica'] = $request->file('imgTematica')->storeAs('img/imgTematicas', $nameImg, 'public');
            }

            tematica::where('id', '=', $id)->update($datos);
            
            return redirect()->route('adminTematicas.index')
            ->with('mensaje', 'La temática a sido editada con exito!');
        }
    }
}
