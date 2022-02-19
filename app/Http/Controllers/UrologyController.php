<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UrologyDoctor;
class UrologyController extends Controller
{
    public function index()
    {
        $urologies=UrologyDoctor::all();
        return view('frontend.Urology',['urology' => $urologies]);
    }
}
