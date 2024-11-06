<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login()
    {


        return view('admin.users.login'
        , ['title' => 'Đăng Nhập Hệ thống']);
    }


    public function store(Request $request)
    {

        
        $this ->validate($request, [
            'email'=> 'required|email:filter',
            'password'=> 'required'
        ]);

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password, ])){
            return redirect()->route('admin');
        }


        Session::flash('error','Email hoặc Password không đúng');
        return back();
    }
}

