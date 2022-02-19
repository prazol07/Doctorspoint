<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generaldoctor;
class GeneralController extends Controller
{

    
    public function index()
    {
        $generals=Generaldoctor::all();
        return view('frontend.GeneralSurgeon',['general' => $generals]);
    }
}

