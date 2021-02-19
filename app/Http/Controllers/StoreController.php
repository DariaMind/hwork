<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function sale(){
        $title = 'Акции';
        $products = Product::where('recommended', '=', 1)->paginate(3);
        
        
        //where('price', '<', 200)->orWhere('category_id', '=', 35)->orderBy('name');//->get();      //where('name','price'); вывести б где рекоменд = 1 (мы задали в фабрике 0-нетб 1-да)->(еще условие)цена меньше 200 -> ili->
       // dd($products);
      // $categories = Category::all();
        return view('store.sale', compact('title','products'));
    }

}
