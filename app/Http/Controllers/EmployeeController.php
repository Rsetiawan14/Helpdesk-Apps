<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data_employee = \App\Employee::all();
        return view('settuser.index',['data_employee' => $data_employee]);
    }
    public function create(Request $request)
    {
        //Insert ke table users
        $user = new \App\User;
        $user->role = $request->role;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = \Str::random(60);
        $user->save();

        //Insert ke table employee
        $request->request->add(['user_id' => $user->id ]);
        $employee = \App\Employee::create($request->all());
        return redirect('/settuser')->with('sukses','Data berhasil diinput');
    }
}
