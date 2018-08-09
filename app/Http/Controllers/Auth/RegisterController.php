<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('roles:admin;super admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => "required|string|unique:users",
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $rolesArr = array();
        $rolesArr['super-admin'] = isset($data['super-admin'])?$data['super-admin']:'none';
        $rolesArr['admin'] = isset($data['admin'])?$data['admin']:'none';
        $rolesArr['sales-manger'] = isset($data['sales-manger'])?$data['sales-manger']:'none';
        $rolesArr['pre-sales-manger'] = isset($data['pre-sales-manger'])?$data['pre-sales-manger']:'none';
        $rolesArr['sales-engineer'] = isset($data['sales-engineer'])?$data['sales-engineer']:'none';
        $rolesArr['pre-sales-engineer'] = isset($data['pre-sales-engineer'])?$data['pre-sales-engineer']:'none';
        $rolesArr['customer'] = isset($data['customer'])?$data['customer']:'none';

        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->phone    = $data['phone'];
        $user->password = Hash::make($data['password']);
        $user->title    = $data['title'];
        $user->save();
        $get_role_from_table = Role::where('name','super admin')->first();
        $user->roles()->attach($get_role_from_table);
//        foreach ($rolesArr as $role){
//            if($role != 'none'){
//
//
//            }
//        }
        return $user;
//        $role_super_admin = Role::where('name',"")->first();
//        return User::create([
//            'name' =>  $data['name'],
//            'email' => $data['email'],
//            'phone' => $data['phone'],
//            'title' => $data['title'],
//            'password' => Hash::make($data['password']),
//        ]);
    }
}
