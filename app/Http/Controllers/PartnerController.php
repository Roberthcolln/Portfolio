<?php

namespace App\Http\Controllers;
use App\Models\KategoriPartner;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Partner';
        $partner = DB::table('partner')
        ->join('kategori_partners', 'partner.id_kategori_partner', 'kategori_partners.id_kategori_partner')
        ->get();
        return view('partner.index', compact('title', 'partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_partner = KategoriPartner::all();
        $partner = Partner::all();
        $title = 'Tambah Partner';
        return view('partner.create', compact('kategori_partner', 'partner', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori_partner' => 'required',
            'nama_partner' => 'required',
            'gambar_partner' => 'required',
        ]);
        $gambar_partner = $request->file('gambar_partner');
        $namafilepartner = 'Partner'.date('Ymdhis').'.'.$request->file('gambar_partner')->getClientOriginalExtension();
        $gambar_partner->move('file/partner/',$namafilepartner);
        
        $partner = new Partner();
        $partner->id_kategori_partner = $request->id_kategori_partner;
        $partner->nama_partner = $request->nama_partner;
        $partner->url_partner = $request->url_partner;
        $partner->gambar_partner = $namafilepartner;
        $partner->save();
        return redirect()->route('partner.index')->with('Sukses', 'Berhasil Tambah partner');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        $kategori_partner = KategoriPartner::all();
        $title = 'Edit Partner';
        return view('partner.edit', compact('title', 'partner', 'kategori_partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);
        $namafilepartner = $partner->gambar_partner;
        $update = [
            'nama_partner' => $request->nama_partner,
            'id_kategori_partner' => $request->id_kategori_partner,
            'url_partner' => $request->url_partner,
            'gambar_partner' => $namafilepartner,
        ];
        if ($request->gambar_partner != ""){
            $request->gambar_partner->move(public_path('file/partner/'), $namafilepartner);
        }   
        $partner->update($update);
        return redirect()->route('partner.index')->with('Sukses', 'Berhasil Edit Partner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $partner = Partner::find($id);
        $namafilepartner = $partner->gambar_partner;
        $file_partner =public_path('file/partner/').$namafilepartner;
        if(file_exists($file_partner)){
            @unlink($file_partner);
        }
        $partner->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Partner');
    }
}
