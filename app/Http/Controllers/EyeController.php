<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eyedoctor;

class EyeController extends Controller
{
    public function index()
    {
        $eyes=Eyedoctor::all();
        return view('frontend.eye',['eye' => $eyes]);
    }
}
