<?php

namespace App\Http\Controllers;
use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function update(Request $request, $id)
    {
        // Find the box by ID
        $box = Box::findOrFail($id);

        // Update the box details
        $box->name = $request->input('name');
        $box->description = $request->input('description');
        // Update other fields as needed

        // Save the changes
        $box->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Box updated successfully');
    }

    public function edit($id)
{
    // Retrieve the box with the given ID
    $box = Box::findOrFail($id);

    // Pass the box data to the view
    return view('admin.boxes.edit', compact('box'));
}
}
