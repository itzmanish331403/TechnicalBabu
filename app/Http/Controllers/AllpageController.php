<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllpageController extends Controller
{
    public function contact() {
        return view('contact.index');
    }
}
