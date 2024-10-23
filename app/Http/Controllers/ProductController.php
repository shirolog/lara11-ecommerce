<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        $categories = Category::with('products')->get();

        return view('pages.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'productname' => 'required',
            'cat_id' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'photo' => 'required|file|mimes:jpeg,jpg,png,gif|max:2048',
        ]);


        $product = new Product;

        $dir = 'images';

        $file = $request->file('photo');

        $extension = $file->getClientOriginalExtension();

        $filename = time().'.'.$extension;

        $path = $file->storeAs($dir, $filename, 'public');

        $product -> productname = $request->input('productname');
        $product -> cat_id = $request->input('cat_id');
        $product -> description = $request->input('description');
        $product -> price = $request->input('price');
        $product -> photo = $path;

        $product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {   

        $oldImg = storage_path('app/public/' . $product->photo);
        
        if(file_exists($oldImg)){
            unlink($oldImg);
        }else{
            dd($oldImg);
        }

        $product->delete();

        return redirect()->back();
    }
}