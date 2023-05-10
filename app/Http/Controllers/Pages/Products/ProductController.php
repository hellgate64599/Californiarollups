<?php

namespace App\Http\Controllers\Pages\Products;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::get();
        return view('products.product', compact('products'));
    }
}
