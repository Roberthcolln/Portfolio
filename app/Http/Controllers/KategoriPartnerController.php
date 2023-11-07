<?php

namespace App\Http\Controllers;

use App\Models\KategoriPartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kategori Partner';
        $kategoriPartner = DB::table('kategori_partners')->get();
        return view('kategori_partner.index', compact('kategori_partner', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori Partner';
        return view('kategori_partner.create', compact('title'));
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
            'nama_kategori_partner' => 'required',
           
        ],$messages);
    
        $data = new KategoriPartner();
        $data->nama_kategori_partner = $request->nama_kategori_partner;
        $data->save();
        return redirect()->route('kategori_partner.index')->with('Sukses', 'Berhasil Tambah Kategori Partner');
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
    public function edit(KategoriPartner $kategoriPartner)
    {
        $title = 'Edit Kategori Partner';
        return view('kategori_partner.edit', compact('kategori_partner', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kategori_Partner = KategoriPartner::find($id);
        $update = [
            'nama_kategori_Partner' => $request->nama_kategori_Partner,

        ]; 
        $kategori_Partner->update($update);
        return redirect()->route('kategori_Partner.index')->with('Sukses', 'Berhasil Edit Kategori Partner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori_partner = KategoriPartner::find($id);
        $namagambarkategori_partner = $kategori_partner->gambar_kategori_partner;
        $gambar_kategori_partner =public_path ('file/kategori_partner/').$namagambarkategori_partner;
        if(file_exists($gambar_kategori_partner)){
            @unlink($gambar_kategori_partner);
        }
        $kategori_partner->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus kategori_partner');
    }
}
