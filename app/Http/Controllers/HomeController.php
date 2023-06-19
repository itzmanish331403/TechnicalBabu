<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $slider = Slider::where('status', 1)->orderByDesc('id')->get();
        $product = Product::where('status', 1)->orderByDesc('id')->get();
        return view('home.index', compact('product'));
    }
}
