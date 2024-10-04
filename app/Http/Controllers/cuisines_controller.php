<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuisines_model;


class cuisines_controller extends Controller
{
    public function index()
    {
        $cuisines = cuisines_model::all();

        return view('cuisines.cuisines', data: ['cuisines' => $cuisines]);

    }
    public function create()
    {

        return view('cuisines.create_cuisines');

    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|string',
           
        ]);
       

        $added = cuisines_model::create([
            'name' => ucfirst($validatedData['name']),
           
        ]);
        $cuisines = cuisines_model::all();
        if ($added) {
            return view('cuisines.cuisines', ['cuisines' => $cuisines]);
        }

    }
}
