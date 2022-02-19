<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Generalphysician;

class GeneralphysicianController extends Controller
{
    public function index()
    {
        $general=Generalphysician::all();
        return view('frontend.Generalphysician',['general' => $general]);
    }
}
