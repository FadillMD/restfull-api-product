<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

//import model Product
use App\Models\Product;

//import resource ProductResource
use App\Http\Resources\ProductResource;

//import Http request
use Illuminate\Http\Request;

//import facade Validator
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //get all product
        $product = Product::latest()->paginate(10);

        //return collection of product as resource
        return new ProductResource(true, 'List Data Product', $product);
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
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:150',  // NotNull, max 150 karakter
            'category'     => 'required|max:100',  // NotNull, max 100 karakter
            'price'        => 'required|numeric',  // NotNull, harus numeric
            'discount'     => 'nullable|numeric',  // Boleh Null, jika ada harus numeric        
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create product
        $product = Product::create([
            'product_name' => $request->product_name,
            'category'     => $request->category,
            'price'        => $request->price,
            'discount'     => $request->discount,
        ]);

        //return response
        return new ProductResource(true, 'Data Product Berhasil Ditambahkan!', $product);

    }

    /**
     * Display the specified resource.
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find product by ID
        $product = Product::find($id);

        //return single post as a resource
        return new ProductResource(true, 'Detail Data Product!', $product);
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
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',  
            'category'     => 'required',  
            'price'        => 'required|numeric', 
            'discount'     => 'nullable|numeric',         
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find product by ID
        $product = Product::find($id);

        //create product
        $product->update([
            'product_name' => $request->product_name,
            'category'     => $request->category,
            'price'        => $request->price,
            'discount'     => $request->discount,
        ]);

        //return response
        return new ProductResource(true, 'Data Product Berhasil Diubah!', $product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //find product by ID
        $product = Product::find($id);

        //delete product
        $product->delete();

        //return response
        return new ProductResource(true, 'Data Product Berhasil Dihapus!', null);
    }
}
