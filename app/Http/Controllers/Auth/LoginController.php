<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home'; // Ganti dengan rute tujuan setelah login berhasil

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Anda juga bisa mengoverride method `username` jika ingin login menggunakan selain email
    // protected function username()
    // {
    //     return 'username'; // Jika ingin login pakai username
    // }

    // Anda bisa menambahkan custom logic di sini jika diperlukan
}
