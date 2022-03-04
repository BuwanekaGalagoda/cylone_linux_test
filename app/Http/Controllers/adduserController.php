<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adduserController extends Controller
{
    public function create() {
        return view('adduser-form');
    }

    // ----------- [ Form validate ] -----------
    public function store(Request $request) {

        $request->validate(
            [
                'name'              =>      'required|string|max:20',
                'nic'              =>      'required|string|max:10',
                'address'           =>      'required|string',
                'mobile'             =>      'required|numeric|min:10',
                'email'             =>      'required|email|unique:users,email',
                'gender'           =>      'string',
                'uname'           =>      'required|string',
                'password'          =>      'required|alpha_num|min:6',
                'confirm_password'  =>      'required|same:password',
                
            ]
        );

        $dataArray      =       array(
            "name"          =>          $request->name,
            "email"         =>          $request->email,
            "phone"         =>          $request->phone,
            "address"       =>          $request->address,
            "password"      =>          $request->password
        );

        $user           =       User::create($dataArray);
        if(!is_null($user)) {
            return back()->with("success", "Success! Registration completed");
        }

        else {
            return back()->with("failed", "Alert! Failed to register");
        }
    }
}
