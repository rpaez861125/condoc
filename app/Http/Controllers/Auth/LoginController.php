<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        $credentials = $this->validate(request(),[
            'email'         =>  'email|required|string',
            'password'      =>  'required|string'
        ]);
       
        if(Auth::attempt($credentials))
        {
            return redirect()->route('front');
        }
        return back()
                ->withErrors(['email'  => trans('auth.failed')])
                ->withInput(request(['email']));
    }
}
