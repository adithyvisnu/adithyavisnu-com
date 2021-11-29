<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\MataKuliah;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        # code...
        return view('template')->with('matkul', MataKuliah::get());
    }

    public function postMatkul(Request $request)
    {
        # code...
        $matkul = new MataKuliah;
        $matkul->nama_mata_kuliah = $request->nama_mata_kuliah;
        $matkul->save();
        return redirect()->route('index');
    }
}
