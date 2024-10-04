<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_model;

class admin_controller extends Controller
{
    function create()
    {
        return view('admin.admin_create');
    }
    function create_post(Request $request)
    {


        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',

            'email' => 'required|email|unique:admin,email',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);


        $added = admin_model::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],


            'email' => $validatedData['email'],
            'password' => $validatedData['password']



        ]);

        if ($added) {

            return view('admin.admin_login');
        }

    }

    public function login_form()
    {
        return view('admin.admin_login');
    }
    function login_post(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $admin = admin_model::where('email', $email)->first();
        if (!$admin) {
            return response()->json([
                'error' => "admin do not exit"
            ]);
        } else {
            if ($admin->password == $password) {
                return view('admin_layout.admin_layout');
            } else {
                return response()->json([
                    'error' => "Wrong password or email"
                ]);
            }
        }



        // return view('admin_layout.admin_layout');


    }
}
