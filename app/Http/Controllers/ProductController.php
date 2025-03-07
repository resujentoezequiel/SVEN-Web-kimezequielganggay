<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_index(){

        return view('blade_view.product_dashboard');
    }
}
