<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackController extends Controller
{
    public function index()
    {
        return view('backoffice.admin');
    }

    public function create()
    {
        return view('backoffice.pages.fichier');
    }

    public function store(Request $request)
    {
        Storage::put('public/img', $request->file('name'));

        $store = new File;
        $store->name = $request->name;
        $store->save();

        return view('backoffice.admin');
    }
}
