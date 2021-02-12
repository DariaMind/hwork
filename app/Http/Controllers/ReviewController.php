<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function reviews()
    {
        $reviews = Review::all();    
        return view('main.reviews', compact('reviews'));
    }
    public function getReviews(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:55',  //proverka polej
            'review' => 'required|min:10',
        ]);
      
        return back()->with('success', 'Thanks!');
    }
}
