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
}
