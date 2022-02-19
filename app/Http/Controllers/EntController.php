<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entdoctor;

class EntController extends Controller
{
    
    public function index()
    {
        $ents=Entdoctor::all();
        return view('frontend.ent',['ent' => $ents]);
    }
}
