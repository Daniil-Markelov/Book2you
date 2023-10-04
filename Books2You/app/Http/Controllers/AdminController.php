<?php

namespace App\Http\Controllers;
use App\Models\Box;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $boxes = Box::all();
        return view('admin.dashboard', compact('boxes'));
    }

    public function createBox()
{
    return view('admin.boxes.create');
}

public function storeBox(Request $request)
{
    
    $request->validate([
        'name' => 'required|string|max:255',
        'genre_id' => 'required|numeric',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image_path' => 'required|string|max:50', 
    ]);

    $box = new Box();
    $box->name = $request->input('name');
    $box->genre_id = $request->input('genre_id');
    $box->description = $request->input('description');
    $box->Price = $request->input('price');
    $box->Image = $request->input('image_path'); 

    
    $box->save();

    
    return redirect()->route('admin.dashboard')->with('success', 'Box created successfully');
}
}
