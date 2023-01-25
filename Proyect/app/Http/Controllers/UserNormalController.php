<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Requests\UserRequest;
use Validator;
use Flash;
use Update;

class UserNormalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tematicas = \DB::table('tematicas')
            ->join('albums', 'albums.id', '=', 'tematicas.id_album')
            ->select('tematicas.id', 'tematicas.imgTematica', 'tematicas.nombretematica', 'albums.nombreAlbum')
            ->orderBy('albums.id', 'ASC')
            ->get();

        return view('home')
        ->with('tematicas', $tematicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $home)
    {
        return view('usuario/editarUsuarioN', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $home)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'min:4', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $request->merge([
                'password' => Hash::make($request->password)
            ]);
            $home->update($request->all());
            return redirect()->route('home.index');
        }
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
