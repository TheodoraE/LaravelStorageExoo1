<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $store = File::all();
        return view('accueil', compact('store'));
    }

    
}
