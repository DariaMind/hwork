<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function sale(){
        $title = 'Акции';
        $products = Product::all();      //where('name','price');

      // $categories = Category::all();
        return view('main.sale', compact('title','products'));
    }
}
