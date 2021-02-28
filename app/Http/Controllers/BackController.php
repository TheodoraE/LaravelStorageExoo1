<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackController extends Controller
{
    public function index()
    {
        $store = File::all();
        return view('backoffice.admin', compact('store'));
    }

    public function create()
    {
        return view('backoffice.pages.fichier');
    }

    public function store(Request $request)
    {
        // dd($request->request);
        $store = new File;
        $store->src = $request->file('src')->hashName();
        $store->save();

        // $request->file('src')->storePublicly('storage/img/', 'public');

        Storage::put('public/img', $request->file('src'));
        
        return redirect('/backoffice');
    }
}
