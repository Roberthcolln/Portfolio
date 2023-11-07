<?php

namespace App\Http\Controllers;

use App\Models\FormPertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formPertanyaan = DB::table('form_pertanyaan')
            ->orderByDesc('id_form_pertanyaan')
            ->get();
        $title = 'Data Form Pertanyaan';
        return view('form_pertanyaan.index', compact('title', 'formPertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $title = 'Tambah Tambah Form Pertanyaan';
        return view('form_pertanyaan.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);
        DB::table('form_pertanyaan')->insert($validatedData);
        return redirect()->back()->with('Sukses', 'Pesan Berhasil Dikirim !!');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormPertanyaan $formPertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormPertanyaan $formPertanyaan)
    {
        $title = 'Edit Form Pertanyaan';
        $formPertanyaan = DB::table('form_pertanyaan')->where('id_form_pertanyaan', $id)->first();  
        return view('form_pertanyaan.edit', compact('formPertanyaan', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormPertanyaan $formPertanyaan)
    {
        $formPertanyaan = FormPertanyaan::findorfail($id);
        $update = [
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ];
        $formPertanyaan->update($update);
        return redirect()->route('form_pertanyaan.index')->with('Sukses', 'Berhasil Edit Form Pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormPertanyaan $formPertanyaan)
    {
        $formPertanyaan->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Data ');
    }
}
