<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\KategoriEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Education';
        $education = DB::table('education')->orderByDesc('id_education')->get();
        return view('education.index', compact('education', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $education = Education::all();
        $title = 'Tambah Education';
        return view('education.create', compact('education', 'title'));
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
            'id_kategori_education' => 'required',
            'nama_education' => 'required',
            'keterangan_education' => 'required',
            'tanggal_masuk_education' => 'required',
            'tanggal_keluar_education' => 'required',
        ],$messages);
        
        $data = new Education();
        $data->id_kategori_education = $request->id_kategori_education;
        $data->nama_education = $request->nama_education;
        $data->keterangan_education = $request->keterangan_education;
        $data->tanggal_masuk_education = $request->tanggal_masuk_education;
        $data->tanggal_keluar_education = $request->tanggal_keluar_education;
        $data->slug_education = Str::slug($request->nama_education); 
        $data->save();
        return redirect()->route('education.index')->with('Sukses', 'Berhasil Tambah Education');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $education = Education::find($id);
        $kategori_education = KategoriEducation::all();
        $title = 'Edit Education';
        return view('education.edit', compact('kategori_education', 'education', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $education = Education::find($id);
        $update = [
            'id_kategori_education' => $request->id_kategori_education,
            'nama_education' => $request->nama_education,
            'keterangan_education' => $request->keterangan_education,
            'tanggal_masuk_education' => $request->tanggal_masuk_education,
            'tanggal_keluar_education' => $request->tanggal_keluar_education,
            'slug_education' => Str::slug($request->nama_education),
        ];
        
        $education->update($update);
        return redirect()->route('education.index')->with('Sukses', 'Berhasil Edit Education');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $education = Education::find($id);
        $education->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Education');
    }
}
