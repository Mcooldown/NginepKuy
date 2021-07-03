<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Accomodation;
use App\Http\Models\Rating;

class AccomodationController extends Controller
{
    public function index(){
        $accomodations = Accomodation::all();
        return view('', compact('accomodations'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'category'=>'required',
            'city'=>'required|max:255',
            'address'=>'required',
        ]);

        $path = $request->file('foto_barang')->store('images');
        Accomodation::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'photo' => $path,
            'city' => $request->city,
            'address' => $request->address
        ]);

        return redirect('/');
    }
}
