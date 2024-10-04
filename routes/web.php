<?php

use App\Http\Controllers\home_page_controller;
use App\Http\Controllers\restaurant_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\category_controller;
use App\Http\Controllers\menus_controller;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\cuisines_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restaurant;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// swiggy

Route::get('/', [home_page_controller::class, 'index'])->name('home_page');

Route::get('/home', [home_page_controller::class, 'index']);


// admin-panel



Route::get('/admin_panel', function () {
    return view('admin_layout.admin_layout');
})->name('admin.layout');

// Restaurant

Route::get('/restaurant/create', [restaurant_controller::class, 'create'])->name('restaurant.create');
Route::get('/restaurant/index', [restaurant_controller::class, 'index'])->name('restaurant.index');
Route::post('/admin_panel/', [restaurant_controller::class, 'store'])->name('restaurant.store');



// admin

Route::get('/admin_create', [admin_controller::class, 'create'])->name('admin.create');
Route::post('/admin_login', [admin_controller::class, 'create_post'])->name('admin.create.post');

Route::get('/admin/login', [admin_controller::class, 'login_form'])->name('admin.login');
Route::post('/admin_panel/loggedIn', [admin_controller::class, 'login_post'])->name('admin.login.post');


//category

Route::get('/restaurants/categories', [category_controller::class, 'index'])->name('categories.index');
Route::get('/restaurants/categories/create', [category_controller::class, 'create'])->name('categories.create');
Route::post('/restaurants/categories', [category_controller::class, 'store'])->name('categories.store');
//cuisines

Route::get('/restaurants/cuisines', [cuisines_controller::class, 'index'])->name('cuisines.index');
Route::get('/restaurants/cuisines/create', [cuisines_controller::class, 'create'])->name('cuisines.create');
Route::post('/restaurants/cuisines', [cuisines_controller::class, 'store'])->name('cuisines.store');


//menu

Route::get('/restaurants/categories/menu', [menus_controller::class, 'index'])->name('menus.index');
Route::post('/restaurants/categories/menu/show', [menus_controller::class, 'show'])->name('menus.show');
Route::get('/restaurants/categories/menu/create', [menus_controller::class, 'create'])->name('menus.create');

Route::post('/restaurants/categories/menu', [menus_controller::class, 'store'])->name('menus.store');

//profile

Route::get('/profile', function () {
    return view('profile.profile');
});


//about_us


Route::get('/about_us', function () {
    return view('about_us.about_us');
});


//user-register

Route::post('/', [user_controller::class, 'store'])->name('user.store');

//search

Route::get('/restaurant-food/search',  [home_page_controller::class, 'search'])->name('search');

//offers_near_me
Route::get('/offers-near-me', function () {
    return view('homepage.offers_near_me');
})->name('offers-near-me');

//restauarnt-menu

Route::get('/restaurant/menu/{id}', [restaurant_controller::class, 'showMenu'])->name('restaurant.showMenu');

//category-restaurants
Route::get('/category/restaurants/{id}', [restaurant_controller::class, 'showRestaurantsBycategory'])->name('category.restaurants');

//city-restaurants

Route::get('/city-restaurants/{city}', [restaurant_controller::class, 'showCityRestaurants'])->name('city.restaurants');

//cuisine-restaurants
Route::get('/cuisine-restaurants/{id}', [restaurant_controller::class, 'showRestaurantsByCuisines'])->name('cuisine.restaurants');

Route::get('/restaurants/filter', [restaurant_controller::class, 'filter'])->name('restaurants.filter');
// routes/web.php
Route::get('/searchResto', [restaurant_controller::class, 'searchResto'])->name('searchResto');
