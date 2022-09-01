<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

// add 
use Illuminate\Http\Request;
use Illuminate\validation\Rule;

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


    // add
    //  /**
    //  * Validate the user login request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return void
    //  *
    //  * @throws \Illuminate\Validation\ValidationException
    //  */
    // protected function validateLogin(Request $request)
    // {
    //     $request->validate([
    //         $this->username() => [
    //             'required','string',
    //             Rule::exists('users')->where(function ($query){
    //                 $query->where('isVerified', true);
    //             })
    //         ],
    //         'password' => 'required|string',
    //     ], [
    //         $this->username(). '.exists' => 'Email koe urung di Aktivasi jhon, Kudune di Aktivasi Sikek'
    //     ]);
    // }

}
