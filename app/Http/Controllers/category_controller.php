<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories_model;

class category_controller extends Controller
{
    public function index()
    {
        $categories = categories_model::all();

        return view('category.categories', ['categories' => $categories]);

    }
    public function create()
    {

        return view('category.create_categories');

    }

    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',

        ]);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/categories'), $imageName);
            $validatedData['image'] = 'uploads/categories/' . $imageName;
        }

        $added = categories_model::create([
            'name' =>ucfirst( $validatedData['name']),
            'image' => $validatedData['image'],
        ]);
        $categories = categories_model::all();
        if ($added) {
            return view('category.categories', ['categories' => $categories]);
        }

    }
}
