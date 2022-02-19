<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TypeController extends Controller
{
    public function index()
    {
        $types=Category::all();
        return view('frontend.categories',['categories' => $types]);
    }
}
