<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::simplePaginate(5);
      $totalProducts = count(Product::all());

      return view('front/products/allproducts', compact('products','totalProducts'));
    }

    public function show($id)
    {
      $theProduct = Product::find($id);

      return view('front.products.show', compact('theProduct'));
    }

    public function create()
    {
  		// Traer todo los géneros de la DB
  		$colors = \App\Color::orderBy('name')->get();
      $sizes = \App\Size::orderBy('name')->get();
      $categories = \App\Category::orderBy('name')->get();

  		return view('front.products.create', compact('colors','sizes','categories'));
  	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
   	{
      // dd($request->all());
   		// 1. Validamos
   		$request->validate([

   			// input_name => rules,
   			'name' => 'required | max:30',
        'price' => 'required | max:10',
        'description' => 'required | max:30',
        'poster' => 'required | image',
        'colors' => 'required',
   			'sizes' => 'required ',
        'categories' => 'required ',


   		], [
   			// input_name.rule => message
   			'name.required' => 'El campo nombre es obligatorio',
        'name.max' => 'El campo nombre debe contener máximo 30 carácteres',
        'price.required' => 'El campo precio es obligatorio',
        'price.integer' => 'El campo precio debe ser un número',
        'price.max' => 'El campo precio debe contener máximo 5 carácteres',
        'description.required' => 'La descripción es obligatoria',
        'description.max' => 'La descripción debe contener máximo 30 carácteres',
        'poster.required' => 'La imagen es obligatoria',
        'poster.image' => 'La imagen no es un formato válido',
        'colors.required' => 'Debes seleccionar al menos un color',
        'sizes.required' => 'Debes seleccionar al menos un talle',
        'categories.required' => 'Debes seleccionar al menos una categoria',

   		]);

      $product = new Product;

  		// Asocio atributos con valores
  		$product->name = $request->input('name');
  		$product->price = $request->input('price');
  		$product->description = $request->input('description');


  		$product->category_id = $request->input('categories');

  		// Obtengo el archivo que viene en el formulario (Objeto de Laravel) que tiene a su vez el archivo de la imagen
  		$image = $request->file('poster'); // El value del atributo name del input file

  		if ($image) {
  			// Armo un nombre único para este archivo
  			$imageFinal = uniqid("img_") . "." . $image->extension();

  			// Subo el archivo en la carpeta elegida
  			$image->storePubliclyAs("public/images", $imageFinal);

  			// Le asigno la imagen a la película que guardamos
  			$product->poster = $imageFinal;
  		}

  		$product->save();

      $product->colors()->attach($request->input('colors'));
      $product->sizes()->attach($request->input('sizes'));

  		// 3. Redireccionamos SIEMPRE a una RUTA
  		return redirect('/products/' . $product->id);
    }


    public function destroy($id)
  	{
  		// Busco la Movie
  		$productToDelete = Product::find($id);

  		// La borro
  		$productToDelete->delete();


  		// Redireccionamos SIEMPRE a una RUTA
  		return redirect('/products');
  	}

  	public function edit($id)
  	{
  		// Busco la Movie
  		$productToEdit = Product::find($id);

      // Traer todo los géneros de la DB
  		$colors = \App\Color::orderBy('name')->get();
      $sizes = \App\Size::orderBy('name')->get();
      $categories = \App\Category::orderBy('name')->get();

  		return view('front.products.edit', compact('colors','sizes','categories','productToEdit'));
  	}


    public function update(Request $request, $id)
    {
      $productToEdit = Product::find($id);

      // Asocio atributos con valores
      $productToEdit->name = $request->input('name');
      $productToEdit->price = $request->input('price');
      $productToEdit->description = $request->input('description');
      $productToEdit->category_id = $request->input('categories');

      // Obtengo el archivo que viene en el formulario (Objeto de Laravel) que tiene a su vez el archivo de la imagen
      $image = $request->file('poster'); // El value del atributo name del input file

      if ($image) {
        // Armo un nombre único para este archivo
        $imageFinal = uniqid("img_") . "." . $image->extension();

        // Subo el archivo en la carpeta elegida
        $image->storePubliclyAs("public/images", $imageFinal);

        // Le asigno la imagen al producto que guardamos
        $productToEdit->poster = $imageFinal;
      }

      $productToEdit->save();

      $productToEdit->colors()->attach($request->input('colors'));
      $productToEdit->sizes()->attach($request->input('sizes'));

      // 3. Redireccionamos SIEMPRE a una RUTA
      return redirect('/products');
    }


}
