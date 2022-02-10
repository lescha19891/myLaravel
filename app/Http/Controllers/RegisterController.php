<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
class RegisterController extends Controller
{
    public function register(RegisterRequest $req){
        $request = new User();
        $request->email = $req->email;
        $request->name = $req->name;
        $request->password = $req->password;
        $request->save();
        return redirect()->route('home')->with('success', 'Вы успешно зарегистрированы');
    }
    public function login(Request $req){
        $this->validate($req, [
           'name' => 'required',
           'password' => 'required',
       ]);
        $data = new User();
        $datafind=$data->where('name', '=', $req->name)->first();
//        dd($datafind->name);
        if($datafind->password == $req->password){
            return redirect()->route('home')->with('success', 'Вы авторизированы');
        } else {
            return redirect()->route('login')->with('success', 'логин не зарегистрирован');
        }
    }
}
