<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class PagesController extends Controller
{
    public function index(Product $products)
    {
        $products = [
            'slider' => $products->all(),
            'new' => $products->take(3)->get()
        ];

        return view('index', compact('products'));
    }

    public function category($category)
    {
        $category = Category::where('name', "{$category}")->first();
        $products = $category->products()->get();

        return view('category', compact('products'));
    }

    public function register()
    {
        if (!session()->get('name')) {
            return view('register');
        } else {
            return redirect('/');
        }
    }

    public function product($category, $product)
    {
        $product = str_replace("-", " ", $product);
        $products = Product::where('name', 'LIKE', "{$product}")->first();
        return view('product', compact('products'));
    }

}