<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
//buat hashing
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    
    //
    public function index(){
        return view('register.index', [
            'title' => 'register'
        ]);
    }

    public function reg(Request $request)
    {
        //:dns domain email benar
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);
        // enkripsi password
        //cara 1 = $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // alert regist berhasil
        // 1. session()->flash('success', 'regist berhasil');
        // 2.
        return redirect('/login')->with('success', 'regist berhasil');
    }
}
