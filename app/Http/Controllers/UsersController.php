<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;

class UsersController extends Controller
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
        $users = User::all();
        return view('users.index')->with('users',$users);
    }
    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        return view('users.edit')->with(['user'=>$user,'roles'=>$roles]);
    }

    public function update(Request $request,$id){
//        $this->validate($request,[
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255',
//            'phone' => "required|string|unique:users",
//        ]);


        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->title = $request->input('title');

        if($request->input('password') != null )// Password change
            $user->password = $request->input('password');
        $roles = $request->input('role');
        $user->addOnlyRoles($roles);

        $user->save();
        return redirect('/users')->with('status',"Successfully updated");
    }

    public function destroy($id){
        $user = User::find($id)->delete();
        if(User::find($id)){
            return redirect('/users')->with('danger',"Error: $id is not deleted");
        }else
            return redirect('/users')->with('status',"successfully deleted $id");
    }
}
