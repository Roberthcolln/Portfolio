<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Work';
        $work = DB::table('work')->orderByDesc('id_work')->get();
        return view('work.index', compact('work', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $work = Work::all();
        $title = 'Tambah work';
        return view('work.create', compact('work', 'title'));
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
            'nama_work' => 'required',
            'keterangan_work' => 'required',
            'tanggal_masuk_work' => 'required',
            'tanggal_keluar_work' => 'required',
        ],$messages);
        
        $data = new Work();
        $data->nama_work = $request->nama_work;
        $data->keterangan_work = $request->keterangan_work;
        $data->tanggal_masuk_work = $request->tanggal_masuk_work;
        $data->tanggal_keluar_work = $request->tanggal_keluar_work;
        $data->slug_work = Str::slug($request->nama_work); 
        $data->save();
        return redirect()->route('work.index')->with('Sukses', 'Berhasil Tambah Work');
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
        $work = Work::find($id);
        $title = 'Edit Work';
        return view('work.edit', compact('work', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $work = Work::find($id);
        $update = [
            'nama_work' => $request->nama_work,
            'keterangan_work' => $request->keterangan_work,
            'tanggal_masuk_work' => $request->tanggal_masuk_work,
            'tanggal_keluar_work' => $request->tanggal_keluar_work,
            'slug_work' => Str::slug($request->nama_work),
        ];
        
        $work->update($update);
        return redirect()->route('work.index')->with('Sukses', 'Berhasil Edit Work');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $work = Work::find($id);
        $Work->delete();
        return redirect()->back()->with('Sukses', 'Berhasil Hapus Work');
    }
}
