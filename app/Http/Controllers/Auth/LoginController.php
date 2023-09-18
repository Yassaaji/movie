<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email Harus Diisi.',
            'password.required' => 'Password Harus Diisi.'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $user = ModelsUser::all();
        if (Auth::attempt($infologin)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.index');
            } else if ($user->role == 'user') {
                return redirect()->route('tes');
            }
        }

        return redirect()->back()->withErrors('Email dan password yang dimasukkan tidak sesuai')->withInput();


        function logout(){
            Auth::logout();
            return redirect('');
        }

        // if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))) {
        //    if(auth()->user()->is_admin==1){
        //        return redirect()->route('admin.index');
        //    } else {
        //        return redirect()->route('home');
        //    }
        // } else {
        //    return redirect()->route('login');
        // }
    }
}
