<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Requests\UserRequest;
use Validator;
use Flash;
use Delete;
use Update;

class AdminUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('administrador');
    }

    public function index(){
        $usuarios = \DB::table('users')
            ->select('users.*')
            ->orderBy('id', 'ASC')
            ->simplePaginate(5);
        return view('administrador/adminUsers')->with('usuarios', $usuarios);
    }

    public function create(){
        return view('adminUsers.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'min:4', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $usuarios = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'rol' => $request->rol,
            ]);
            return back()
            ->with('mensaje', 'El usuario a sido creado con exito!');
        }
    }

    public function destroy(User $id){
        $usuario = User::find($id);
        $usuario->each->delete();
        
        return back()
        ->with('mensaje', 'El usuario a sido borrado con exito!');
    }

    public function edit(User $adminUser){
        return view('administrador/editUser', compact('adminUser'));
    }

    public function update(Request $request, User $adminUser){
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'min:4', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'rol' => ['required'],
        ]);
        if($validator -> fails()){
            return back()
            ->withErrors($validator);
        }else{
            $request->merge([
                'password' => Hash::make($request->password)
            ]);
            $adminUser->update($request->all());
            return redirect()->route('adminUsers.index')
            ->with('mensaje', 'El usuario a sido editado con exito!');
        }
    }
}
