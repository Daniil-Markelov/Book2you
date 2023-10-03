<?php

namespace App\Http\Controllers;
use App\Models\Box;
use App\Models\Genre;
use Illuminate\Http\Request;

class BoxController extends Controller
{

    public function edit($id)
    {
        // Retrieve the box with the given ID
        $box = Box::findOrFail($id);
    
        // Pass the box data to the view
        $genres = Genre::all();
        return view('admin.boxes.edit', compact('box', 'genres'));
    }

    public function update(Request $request, $id)
    {
        // Find the box by ID
        $box = Box::findOrFail($id);

        // Update the box details
        $box->name = $request->input('name');
        $box->description = $request->input('description');
        $genreId = $request->input('genre_id');
        $genre = Genre::find($genreId);

    if ($genre) {
        $box->genre_id = $genre->id;
        $box->save();
    } else {
        $errorMessage = 'Genre not updated teehee.';
        return back()->with('error', $errorMessage);
    }

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Box updated successfully');
    }

    public function index()
    {
        $boxes = Box::all();
    return view('boxes.index', ['boxes' => $boxes]);
    }


}
