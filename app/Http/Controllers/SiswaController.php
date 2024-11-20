<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function show($id)
    {
        $siswa = Siswa::find($id); //SELECT * FROM id = $id
        return view('siswa.show', compact('siswa'));
    }

    public function create(Request $request)
    {
        return view('siswa.create');
    }
        
    
    public function store(Request $request)
    {
         //Validasi data
        $request->validate([
            'nama_depan'=>'required',
            'email' => 'required:siswa,email',
               // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data ke dalam database
        Siswa::create($request->all());

        // Redirect ke halaman daftar siswa dengan pesan sukses
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id); // Find the student by ID
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request,$id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all()); // Update the student data
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {   
        $siswa = Siswa::find($id); // Use find to retrieve the record
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa Beerhasil dihapus.');
    }

    public function profile($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.profile', compact('siswa'));
    }

    public function logout()
    {
        Auth::logout(); // Log out the user

        return redirect('/'); // Redirect to the home page or any other page
    }
    
}
