<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NeurologyDoctor;

class NeurologyController extends Controller
{
    public function index()
    {
        $neurologies=NeurologyDoctor::all();
        return view('frontend.neurology',['neurology' => $neurologies]);
    }
}
