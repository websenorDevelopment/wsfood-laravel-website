<?php

namespace App\Http\Controllers;
use App\Models\categories_model;
use App\Models\cuisines_model;
use App\Models\restaurant_model;
use Illuminate\Http\Request;

class home_page_controller extends Controller
{
    public function index()
    {
        $restaurant = restaurant_model::where('state', 'Rajasthan')->withCount('orders')->orderBy('rating','desc')
            ->orderBy('orders_count', 'desc')->get();
       
        $categories = categories_model::all();
        
        
        $userLatitude = 67;
        $userLongitude = 167 ;
       
        
        $cities = restaurant_model::selectRaw('city, AVG(rating) as avg_rating')
        ->groupBy('city')
        ->orderByDesc('avg_rating') 
        ->get();
      
      
        
        
        $cuisines = cuisines_model::selectRaw("cuisines.*, 
            (6371 * acos(cos(radians(?)) * cos(radians(restaurant.latitude)) * 
            cos(radians(restaurant.longitude) - radians(?)) + 
            sin(radians(?)) * sin(radians(restaurant.latitude)))) AS distance",
            [$userLatitude, $userLongitude, $userLatitude]
        )
            ->join('cuisine_restaurant', 'cuisines.id', '=', 'cuisine_restaurant.cuisine_id')
            ->join('restaurant', 'cuisine_restaurant.restaurant_id', '=', 'restaurant.id')
            ->groupBy('cuisines.id', 'cuisines.name', 'cuisines.created_at', 'cuisines.updated_at', 'restaurant.latitude', 'restaurant.longitude')
            ->having('distance', '<', 10)
            ->orderBy('distance')
            ->get();

        return view('homepage.home', compact('restaurant', 'categories', 'cuisines','cities'));
    }

    public function search(){
        $categories = categories_model::all();

        return view('homepage.search',compact('categories'));
    }
}
