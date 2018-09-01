<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Hash;
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
    public function create(){
        $roles = Role::all();
        return view('users.create')->with('roles',$roles);
    }
    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        return view('users.edit')->with(['user'=>$user,'roles'=>$roles]);
    }
    public function store(Request $request){
        $user = new User();
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->phone    = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        $user->title    = $request->input('title');;
        $roles = $request->input('role');
        $user->save();
        $user->addRoles($roles);
        return $roles;
    }
    public function update(Request $request,$id){

        $user = User::find($id);
        $this->validate($request,[
            'role' => 'required'
        ]);

        if( $request->input('name')!=null){
            $this->validate($request, ['name' => 'string|max:255']);
            $user->name =  $request->input('name');
        }

        if($request->input('email')!=null) {
            $this->validate($request, ['email' => 'string|email|max:255|unique:users']);
            $user->email = $request->input('email');
        }
        if($request->input('phone') != null) {
            $this->validate($request, ['phone' => "string|unique:users",]);
            $user->phone = $request->input('phone');
        }
        if($request->input('password') != null) {
            $this->validate($request, ['password' => 'required|string|min:6|confirmed',]);
            $user->password = Hash::make($request->input('password'));
        }

        if($request->input('title') != null)
            $user->title = $request->input('title');

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
