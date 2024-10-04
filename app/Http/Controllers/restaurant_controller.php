<?php

namespace App\Http\Controllers;

use App\Models\categories_model;
use App\Models\cuisines_model;
use Illuminate\Http\Request;
use App\Models\restaurant_model;

class restaurant_controller extends Controller
{
    public function index()
    {
        $restaurants = restaurant_model::all();

        return view(
            'restaurant_crud.restaurant_index',
            ['restaurants' => $restaurants],
        );
    }

    public function create()
    {
        $cuisines = cuisines_model::all();

        return view('restaurant_crud.create_restaurant', ['cuisines' => $cuisines]);

    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'state' => 'required',
            'city' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'cuisine_type' => 'required|array',
            'cuisine_type.*' => 'exists:cuisines,id',
            'rating' => 'nullable|numeric|min:1|max:5',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'latitude' => 'required|numeric|between:-90,90',
            'longitude' => 'required|numeric|between:-180,180'
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/restaurant'), $imageName);
            $validatedData['image'] = 'uploads/restaurant/' . $imageName;
        }


        $restaurant = restaurant_model::create([
            'name' => ucfirst($validatedData['name']),
            'address' => ucfirst($validatedData['address']),
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'state' => ucfirst($validatedData['state']),
            'city' => ucfirst($validatedData['city']),
            'opening_time' => ucfirst($validatedData['opening_time']),
            'closing_time' => ucfirst($validatedData['closing_time']),

            'rating' => $validatedData['rating'],
            'description' => ucfirst($validatedData['description']),
            'image' => $validatedData['image'] ?? null,
            'latitude' => $validatedData['latitude'],
            'longitude' => $validatedData['longitude']
        ]);


        $restaurant->cuisines()->attach($validatedData['cuisine_type']);

        if ($restaurant) {
            return redirect()->route('restaurant.index');
        } else {
            return response()->json(['error' => 'Error creating restaurant']);
        }
    }

    public function showMenu($id)
    {

        $restaurant = restaurant_model::with([
            'categories' => function ($query) {
                $query->withCount('menus');
                $query->with('menus');
            }
        ])
            ->findOrFail($id);



        return view('homepage.restaurant-menu', compact('restaurant'));
    }
    public function showRestaurantsBycategory($id)
    {


        $item = categories_model::findOrFail($id);


        $restaurant = $item->restaurant;
        $no_restaurant = $item->restaurant->count();


        return view('homepage.category-restaurants', compact('restaurant', 'item', 'no_restaurant'));
    }

    public function showCityRestaurants($city)
    {
        $cityname = $city;

        $restaurant = restaurant_model::where('city', $city)->get();
        return view('homepage.city-restaurants', compact('restaurant', 'cityname'));

    }
    public function showRestaurantsByCuisines($id)
    {
        $cuisine = cuisines_model::with('restaurant')->findOrFail($id);
        $restaurant = $cuisine->restaurant;

        return view('homepage.cuisine-restaurants', compact('restaurant', 'cuisine'));

    }
    public function filter(Request $request)
    {
        $filter = $request->input('filter');
        $query = restaurant_model::query();

        if ($filter == 'rating') {
            $query->where('rating', '>=', 4);
        }


        $restaurant = $query->get();


        return view('homepage.filtered_list', compact('restaurant'))->render();
    }

    public function searchResto(Request $request)
    {
        $query = $request->get('query');
    
        if ($query) {
            $results = restaurant_model::where('name', 'LIKE', "%$query%")
                ->get()
                ->map(function($restaurant) {
                    $restaurant->image = asset($restaurant->image);  
                    return $restaurant;
                });
        } else {
            $results = [];
        }
    
        return response()->json($results);
    }
    

}
