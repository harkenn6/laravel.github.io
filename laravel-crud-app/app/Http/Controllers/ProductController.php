<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the create form
    public function create()
    {
        return view('products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    // Show the edit form
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update the product
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    // Delete the product
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
