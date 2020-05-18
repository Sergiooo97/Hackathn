<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'rol' => ['required', 'string', 'max:255'],
            'carrera' => ['required', 'string', 'max:255'],
            'semestre' => ['required', 'string', 'max:255'],
            'matricula' => ['required', 'string','min:8', 'max:8'],
            'equipoName' => ['required', 'string', 'max:255'],
            'equipoNumber' => ['required', 'integer', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * 
     */

    public function store(Request $request)
    {
        if($avatar = User::setAvatar($request->avatar))
        $request->request->add(['avatar'=>$avatar]);

        $users = new User();
        $users ->name = $request->input('name');
        $users ->lastName = $request->input('lastName');
        $users->avatar= $avatar;
        $users->save();
    }

    protected function create(array $data)
    {
   
       
        return User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'rol' => $data['rol'],
            'carrera' => $data['carrera'],
            'semestre' => $data['semestre'],
            'matricula' => $data['matricula'],
            'equipoName' => $data['equipoName'],
            'equipoNumber' => $data['equipoNumber'],
            'lastName' => $data['lastName'],
            'avatar' => $data['avatar'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
