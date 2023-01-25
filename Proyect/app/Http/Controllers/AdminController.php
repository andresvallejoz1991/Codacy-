<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Requests\UserRequest;
use Validator;
use Auth;

class AdminController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userNormal = \DB::table('users')
            ->select('rol')
            ->where('rol', '=', 'usuario')
            ->get();
        $userAdministrador = \DB::table('users')
        ->select('rol')
        ->where('rol', '=', 'administrador')
        ->get();
        return view('homeAdmin')
            ->with('userNormal', $userNormal)
            ->with('userAdministrador', $userAdministrador);
    }

    public function create(){
        return view('homeAdmin.create');
    }

    public function store(Request $request){
        //
    }
}
