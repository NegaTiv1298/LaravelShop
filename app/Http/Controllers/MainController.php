<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function show()
    {
        return view('index', [
            'title' => 'Test shop Laravel'
        ]);
    }
    public function categories()
    {
        $categories = Category::get();
        return view('product/categories', [
            'categories' => $categories
        ]);
    }
    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', $category->id)->get();
        return view("product/category", [
            'category' => $category,
            'products' => $products
        ]);
    }
}
