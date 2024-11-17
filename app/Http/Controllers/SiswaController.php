<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all(); // Fetch all Siswa records
       
        return view('siswa.index', compact('siswa'));
    }

    //public function create()
        //{
           // return view('siswa.create');
        //}

        //public function store(Request $request)
       // {
       //     return redirect('/siswa');
       // }
}
