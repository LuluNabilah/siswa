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

    if (!$siswa) {
        return redirect()->route('siswa.index')->with('error', 'Siswa not found.'); // Handle the case where the record does not exist
    }

    $siswa->delete($id); // Now it's safe to call delete()
    return redirect($id)->route('siswa.index')->with('success', 'Siswa deleted successfully.');
    }

    public function logout()
    {
        Auth::logout(); // Log out the user

        return redirect('/'); // Redirect to the home page or any other page
    }
    
}
