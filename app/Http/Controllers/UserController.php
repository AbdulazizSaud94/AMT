<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('roles:admin;super admin');
    }

    public function index(){
        view('manageusers');
    }
    public function edit($id){

    }
    public function delete($id){
        return redirect('/');
    }
    public function getUsers(){
        $users = User::all();
        return view('manageusers')->with('users',$users);
    }
}
