<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function Product(Product $products){
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function createProduct(){
        return view ('createProduct');
    }

    public function storeProduct(Request $request){
        $incomingFields = $request->validate([
            'title' => ['required'],
            'price' => ['required'],
            'image_url'=> 'required', 'image'
        ]);
        $productImage = $incomingFields['image_url']->store('uploads', 'public');

        $product = new Product([
            'title' => $incomingFields['title'],
            'price' => $incomingFields['price'],
            'image_url' => $productImage
        ]);
        
        //dd($productImage);
        $product->save();

        return redirect('/');
    }
}
