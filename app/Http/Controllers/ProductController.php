<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //returns the home view
    public function Product(Product $products){
        $products = Product::paginate(3);
        return view('product', ['products' => $products]);
    }

    //returns the view used to create the product listing
    public function createProduct(){
        return view ('createProduct');
    }

    //This function accepts requests and validates before sending it to the database for storage
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

        return redirect('/products');
    }

    //This returns the About view
    public function about(){
        return view('about');
    }
}
