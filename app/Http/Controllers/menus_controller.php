<?php

namespace App\Http\Controllers;

use App\Models\categories_model;
use Illuminate\Http\Request;
use App\Models\menus_model;
use App\Models\restaurant_model;
use App\Models\restaurant_categories_model;

class menus_controller extends Controller
{
    public function index()
    {
        $restaurants = restaurant_model::all();
        $categories = categories_model::all();

        return view('menu.menus', ['restaurants' => $restaurants, 'categories' => $categories]);

    }
    public function create()
    {
        $restaurants = restaurant_model::all();
        $categories = categories_model::all();
        return view('menu.create_menu', ['restaurants' => $restaurants, 'categories' => $categories]);

    }
    public function show(Request $request)
    {
        $restaurantId = $request->input('restaurant_id');
        $categoryId = $request->input('category_id');
        $category = categories_model::where('id', $categoryId)->first();

        $restaurant = restaurant_model::with('categories')->findOrFail($restaurantId);


        $menus = menus_model::where('restaurant_id', $restaurantId)
            ->where('category_id', $categoryId)
            ->get();


        return view('menu.show_menu', compact('restaurant', 'menus', 'category'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'restaurant_id' => 'required',
            'category_id' => 'required',
            'rating' => 'nullable|min:1|max:5',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',


        ]);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/menu-items'), $imageName);
            $validatedData['image'] = 'uploads/menu-items/' . $imageName;
        }
        $added = menus_model::create([
            'name' => ucfirst($validatedData['name']),
            'description' => ucfirst($validatedData['description']),
            'price' => ucfirst($validatedData['price']),
            'restaurant_id' => $validatedData['restaurant_id'],
            'category_id' => $validatedData['category_id'],
            'rating' => $validatedData['rating'],
            'image' => $validatedData['image'],

        ]);
       $restaurant=restaurant_categories_model::create([
        'category_id'=>$validatedData['category_id'],
        'restaurant_id'=>$validatedData['restaurant_id']
       ]);
       
        $menus = menus_model::all();
        $restaurants = restaurant_model::all();
        $categories = categories_model::all();
        if ($added) {
            return view('menu.menus', ['menus' => $menus, 'restaurants' => $restaurants, 'categories' => $categories]);
        }

    }
}
