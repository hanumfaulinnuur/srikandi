<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function Daftar()
    {
        return view("user/register");
    }

    public function ProsesDaftar(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        $request->validate ([
            "name"                  => "required",
            "email"                 => "required|unique:Users",
            "password"              => "required|min:6",
            "password_confirmation" => "required|same:password",
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmation' => $request->password_confirmation,
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password

        ];

        if (Auth::attempt($infologin)) {
            return redirect('user/login')->with('success', ' Registrasi Berhasil, Silahkan Login Ke Akun Anda');
        } else {
        }

    }


        public function Login()
        {
            return view("user/login");
        }

        public function ProsesLogin(Request $request)
        {
            $request->validate([
                'email'     => 'required',
                'password'  => 'required'
            ],[
                'email.required'    => 'Email Wajib',
                'password.required' => 'Password Wajib',
            ]);

            $InfoLogin = [
                'email' =>$request->email,
                'password' =>$request->password
            ];

            if(Auth::attempt($InfoLogin)==true){

                return redirect("/");
            }else{
                return redirect("user/login")->withErrors('Email dan Password yang dimasukkan tidak valid');
            }
        }


        public function Logout()
        {
            Auth::logout();
            return redirect("user/login")->with('success', 'Logout Berhasil. Silakan Masuk Kembali');
        }


        public function UserView(){
            $data['allDataUser']=User::all();
            return view("user/user", $data);
        }
}
