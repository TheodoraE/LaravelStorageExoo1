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

    public function edit($id)
    {
        $edit = File::find($id);
        return view('backoffice.pages.editForm', compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $update = File::find($id);
        Storage::delete('public/img/'.$update->src);
        $update->src = $request->file('src')->hashName();
        $update->save();
        Storage::put('public/img', $request->file('src'));

        return redirect('/backoffice');
    }

    public function destroy($id)
    {
        $destroy = File::find($id);
        Storage::delete('public/img/'.$destroy->src);
        $destroy->delete();
        return redirect('/backoffice');
    }

    public function download($id)
    {
        $down = File::find($id);
        return Storage::download('public/img/'.$down->src);
    }
}
