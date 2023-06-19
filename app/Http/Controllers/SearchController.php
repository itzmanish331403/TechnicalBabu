<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        
        $product = Product::where('name', 'like', "%$keyword%")->Orwhere('url_key', 'like', "%$keyword%")->Orwhere('description', 'like', "%$keyword%")->get();

        
        return view('home.index', ['product' => $product]);
    }
}


    
