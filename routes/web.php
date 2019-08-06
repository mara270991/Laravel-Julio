<?php

use App\Product;
use App\User;

//La Home
Route::get('/', function () {
    return view('front.index');
});

//Products

// Route::get('/newarrivals', function () {
//     return view('front.products.index');
// });

// //One product
// Route::get('/newarrivals/product', function () {
//     return view('front.products.product');
// });

// Products del Admin
Route::group(['middleware' => 'admin'], function () {

    Route::get('/products/{id}/edit', 'ProductsController@edit'); // Formulario para editar
    Route::get('/products/create', 'ProductsController@create'); // Formulario para crear
    Route::post('/products', 'ProductsController@store');
    Route::put('/products/{id}', 'ProductsController@update'); // Ruta para actualizar una productos
    Route::delete('/products/{id}', 'ProductsController@destroy'); // Ruta para borrar una productos
});

  Route::get('/products', 'ProductsController@index'); // Index para productos
  Route::get('/products/{id}/thanks', 'ProductsController@thanks'); // Para enviar los productos al formulario

  Route::get('/products/result/', 'ProductsController@result');
  Route::get('/products/{id}', 'ProductsController@show');

//Faq
Route::get('/faq', function () {
    return view('front.faq.index');
});


// ProfileController

Route::get('/profile/{id}', 'UsersController@show');
Route::put('/profile/{id}', 'UsersController@update');
Route::get('/profile/{id}/edit', 'UsersController@edit');

//categories

Route::get('/categories/{id}', 'ProductsController@categories'); // Index para productos

//Authentication route Laravel

Auth::routes();
