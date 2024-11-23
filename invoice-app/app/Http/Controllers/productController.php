<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function all_product(){
        $products = Product::orderBy('id', 'DESC')->get();
        return response()->json([
            'products' => $products
        ],200);
    }
}
