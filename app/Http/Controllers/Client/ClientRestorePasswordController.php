<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ClientResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct(){
        $this->middleware('guest:client');
    }
    
    public function showResetForm(Request $request)
    {
        return view('client.passwords.reset',[
            'token'=>$request->token,
            'email'=>$request->email]);
    }
    public function guard(){
        return Auth::guard('client');
    }
    public function broker(){
       return Password::broker('clients');
    }
    public function reset(){

    }
}