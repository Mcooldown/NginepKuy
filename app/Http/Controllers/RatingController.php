<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    public function index(){
        return view('ratings.index');
    }

    public function store(Request $request){
        $request->validate([
            'star'=> 'required|numeric',
            'comment' => 'required|min:10',
            'accomodation_id' => 'required'
        ]);

        Rating::create([
            'star' => $request->star,
            'comment' => $request->comment,
            'accomodation_id' => $request->accomodation_id
        ]);
        return redirect('/');
    }
}
