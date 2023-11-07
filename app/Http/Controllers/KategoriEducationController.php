<?php

namespace App\Http\Controllers;

use App\Models\KategoriEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori Education';
        $kategori_education = DB::table('kategori_education')->get();
        return view('kategori_education.index', compact('kategori_education', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Education';
        return view('kategori_education.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi!!!',
        ];
        $request->validate([
            'nama_kategori_education' => 'required',
           
        ],$messages);
    
        $data = new KategoriEducation();
        $data->nama_kategori_education = $request->nama_kategori_education;
        $data->save();
        return redirect()->route('kategori_education.index')->with('Sukses', 'Berhasil Tambah Kategori Education');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriPartner $kategoriPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriEducation $kategoriEducation)
    {
        $title = 'Edit Kategori Education';
        return view('kategori_education.edit', compact('kategori_education', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori_Education = KategoriEducation::find($id);
        $update = [
            'nama_kategori_Education' => $request->nama_kategori_Education,

        ]; 
        $kategori_Education->update($update);
        return redirect()->route('kategori_Education.index')->with('Sukses', 'Berhasil Edit Kategori Education');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori_education = KategoriEducation::find($id);
        $kategori_education->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus kategori_education');
    }
}
