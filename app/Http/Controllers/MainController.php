<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

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
        return view("product/category", [
            'category' => $category
        ]);
    }
}
