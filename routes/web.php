<?php
 use App\Restaurant;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', function (){

  // $resto = new Restaurant();
  // $resto->restaurant_name = "warung kadek";
  // $resto->save();

  $getData = Restaurant::get();
  print_r(json_encode($getData->toArray()));
});


/*
tables:
- restaurants
  restaurant_id
  restaurant_name
  city_id
  description
  tagline
  email
  status

- phone_number
  phone_number_id
  restaurant_id
  phone
  whatsapp Y/N
  created_at
  updated_at

- social_media
  restaurant_id
  social_media_id
  social_media_name
  social_media_url
  social_media_id
  created_at
  updated_at

- address
  address_id
  address_name
  restaurant_id
  city_id
  created_at
  updated_at	

- city
  city_id
  city_name
  created_at
  updated_at

- review
  review_id
  restaurant_id
  user_id
  review
  created_at
  updated_at

- rating
  rating_id
  restaurant_id
  rating
  created_at
  updated_at

- media
  media_id
  media_name_id : retaurant_logo, restaurant_image
  object_id     : restaurant_id
  object_name   : restaurant


*/
