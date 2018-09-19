<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
      public function create(){
      return view('register');
    }

    public function store(){
      $this->validate(request(),[
        'email' =>'required|email|max:255|min:1',
        'password' => 'required|min:3',
        'password2' => 'required|min:3',
        'role' => 'required',
       ]);
       $user = User::create(request(['email','password','role']));
        return view('welcome');
    }
}
