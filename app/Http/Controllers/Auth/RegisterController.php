<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\HttpCache\Store;

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

    public function showRegisterForm(){
        return view('auth.register');
    }

    protected function insertRegister(Request $request) {
        // dd($request);


        $request->validate([
            "name" => 'required|string|min:3|max:250',
            'email' => 'email|required|max:250|unique:users',
            'telepon' => 'required|numeric|regex:/^08\d{9,11}$/',
            'password'=> 'required|string|min:8|confirmed',
            'password_confirmation' => 'required| same:password'
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'name.min' => 'name minimal harus 3 kata',
            'email.required' => 'data tidak boleh kosong',
            'email.email' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah Diguanakan',
            'telepon.required' => 'Telepon harus diisi',
            'telepon.regex' => 'angka depan harus diawali dengan 08',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'password minimal 8 karakter.',
            'password.confirmed' => 'Password tidak sama',

        ]
    );

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->notelp = $request->telepon;
    $user->password = $request->password;

    $user->save();
    // User::create([
    //     'name' => $request->name,
    //     'email' => $request->email,
    //     'noTelp' => $request->telepon,
    //     'password' => Hash::make($request->password),

    // ]);


        $credentials = $request->only('email,password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login')->with('success','Kamu Berhasil Registrasi');

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
