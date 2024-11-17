<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all(); // Fetch all Siswa records
       
        return view('siswa.index', compact('siswa'));
    }

    public function create(Request $request)
    {
        return view('siswa.create');
    }
        

    public function store(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'nullable|string|max:255',
            'email' => 'required|email|unique:siswa',
            // Add other validation rules as necessary
        ]);
    
        $siswa = $request->only(['nama_depan', 'nama_belakang', 'email']);
        $siswa = Siswa::create($siswa);
    
        return redirect()->route('siswa.index')->with('success', 'Siswa created successfully.');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id); //SELECT * FROM id = $id
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'email' => 'unique:siswa,email' .$id,

        ]);

        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
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
}
