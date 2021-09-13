<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::get();

        return view('product/list', [
            'products' => $products
        ]);
    }

}
