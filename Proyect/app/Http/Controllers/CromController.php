<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crom;
use Hash;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Str;
use Validator;
use Flash;
use Delete;
use Update;
use Illuminate\Support\Facades\Storage;

class CromController extends Controller
{
    public function index(){
        $tematicas = \DB::table('tematicas')
            ->select('tematicas.*')
            ->orderBy('id', 'ASC')
            ->get();

        $cromos = \DB::table('croms')
        ->join('tematicas', 'tematicas.id', '=', 'croms.id_tematica')
        ->select('croms.id', 'croms.imgCromo', 'croms.nombreCromo', 'tematicas.nombretematica')
        ->orderBy('croms.id', 'ASC')
        ->simplePaginate(5);

        return view('administrador/uploadCromos')
        ->with('tematicas', $tematicas)
        ->with('cromos', $cromos);
    }

    public function create(){
        return view('uploadCromos.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'imgCromo' => ['required', 'image', 'mimes:jpg,png,jpeg,svg','max:10000'],
            'nombreCromo' => ['required', 'string', 'min:4', 'max:25'],
            'descripcion' => ['required', 'string', 'min:4'],
            'id_tematica' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $datos = request()->except('_token');

            if($request->hasFile('imgCromo')){
                $file = $request->file('imgCromo');
                $nameImg = time().$file->getClientOriginalName();

                $datos['imgCromo'] = $request->file('imgCromo')->storeAs('img/imgCromos', $nameImg, 'public');
            }
            crom::insert($datos);

            return back()
            ->with('mensaje', 'El cromo ha sido subido con exito!');
        }
    }

    public function destroy($id){
        $cromo = crom::findOrFail($id);
        if(Storage::delete('public/'.$cromo->imgCromo)){
            crom::destroy($id);
        }

        return back()
        ->with('mensaje', 'El cromo a sido borrado con exito!');
    }

    public function edit($id){
        $tematicas = \DB::table('tematicas')
            ->select('tematicas.*')
            ->orderBy('id', 'ASC')
            ->get();

        $cromo = crom::findOrFail($id);
        return view('administrador/editCromos', compact('cromo', 'tematicas'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'imgCromo' => ['', 'image', 'mimes:jpg,png,jpeg,svg','max:10000'],
            'nombreCromo' => ['required', 'string', 'min:4', 'max:25'],
            'descripcion' => ['required', 'string', 'min:4'],
            'id_tematica' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $datos = request()->except('_token', '_method');

            if($request->hasFile('imgCromo')){
                $cromo = crom::findOrFail($id);
                Storage::delete('public/'.$cromo->imgCromo);

                $file = $request->file('imgCromo');
                $nameImg = time().$file->getClientOriginalName();

                $datos['imgCromo'] = $request->file('imgCromo')->storeAs('img/imgCromos', $nameImg, 'public');
            }

            crom::where('id', '=', $id)->update($datos);

            return redirect()->route('uploadCromos.index')
            ->with('mensaje', 'El cromo a sido editado con exito!');
        }
    }

}
