<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UsersController extends Controller
{

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // Busco al Usuario
      $user = User::find($id);

      return view('front.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
   	{
   		// Busco al Usuario
   		$userToEdit = User::find($id);

   		return view('front.user.edit', compact('userToEdit'));
   	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
       $userToEdit = User::find($id);

       // Asocio atributos con valores
       $userToEdit->name = $request->input('name');
       $userToEdit->country = $request->input('country');
       $userToEdit->city = $request->input('city');

       // Obtengo el archivo que viene en el formulario (Objeto de Laravel) que tiene a su vez el archivo de la imagen
       $image = $request->file('avatar'); // El value del atributo name del input file

       if ($image) {
         // Armo un nombre único para este archivo
         $imageFinal = uniqid("img_") . "." . $image->extension();

         // Subo el archivo en la carpeta elegida
         $image->storePubliclyAs("public/images", $imageFinal);

         // Le asigno la imagen al producto que guardamos
         $userToEdit->avatar = $imageFinal;
       }

       $userToEdit->save();

       // 3. Redireccionamos SIEMPRE a una RUTA
       return redirect("/profile/$userToEdit->id");
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {

    }
}
