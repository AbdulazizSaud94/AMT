<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){

    }   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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
