<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Konsentrasi;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = DB::table('project')->orderBy('id_project')->get();
        $konf = DB::table('setting')->first();
        $berita = DB::table('berita')
            ->join('team', 'berita.id_team', 'team.id_team')
            ->orderByDesc('id_berita')
            ->limit(5)
            ->get();
        $layanan = DB::table('layanan')
            ->orderByDesc('id_layanan')
            ->limit(6)
            ->get();
        $partner = DB::table('partner')
            ->join('kategori_partners', 'partner.id_kategori_partner', 'kategori_partners.id_kategori_partner')
            ->get();
        $tim = DB::table('team')
            ->limit(12)
            ->get();

        $layananx = DB::table('layanan')->count();
        $projectx = DB::table('project')->count();
        $timx = DB::table('team')->count();
        $partnerx = DB::table('partner')->count();
        $client = DB::table('form_pertanyaan')->count();
        $education = DB::table('education')->orderBy('id_education')->get();
        $sd = DB::table('education')
            ->join('kategori_education', 'education.id_kategori_education', 'kategori_education.id_kategori_education')
            ->where('nama_kategori_education', '=', 'Sekolah Dasar')
            ->get();
        $smp = DB::table('education')
            ->join('kategori_education', 'education.id_kategori_education', 'kategori_education.id_kategori_education')
            ->where('nama_kategori_education', '=', 'Sekolah Menengah Pertama')
            ->get();
        $sma = DB::table('education')
            ->join('kategori_education', 'education.id_kategori_education', 'kategori_education.id_kategori_education')
            ->where('nama_kategori_education', '=', 'Sekolah Menengah Atas')
            ->get();
        $kuliah = DB::table('education')
            ->join('kategori_education', 'education.id_kategori_education', 'kategori_education.id_kategori_education')
            ->where('nama_kategori_education', '=', 'Perguruan Tinggi')
            ->get();
        $work = DB::table('work')->orderBy('id_work')->get();
        return view('welcome', compact('client', 'work', 'sd', 'smp', 'sma', 'kuliah', 'education', 'layananx', 'partnerx', 'projectx', 'timx', 'berita', 'konf', 'partner', 'layanan', 'tim',  'project'));
    }

    public function read($slug)
    {
        $konf = Setting::first();
        $baca = DB::table('berita')
            ->join('team', 'berita.id_team', 'team.id_team')
            ->where('slug_berita', $slug)
            ->first();
        $berita = DB::table('berita')
            ->orderByDesc('berita.id_berita')
            ->limit(6)
            ->get();
        return view('read', compact('konf', 'baca', 'berita'));
    }

    public function layanan()
    {
        $layanan = DB::table('layanan')->orderByDesc('id_layanan')->get();
        $konf = DB::table('setting')->first();
        return view('layanans', compact('konf', 'layanan'));
    }

    public function kontak()
    {
        $konf = DB::table('setting')->first();
        return view('kontak', compact('konf'));
    }

    public function tentang()
    {
        $konf = DB::table('setting')->first();
        $founder = DB::table('team')->where('jabatan_team', '=', 'Board Of Founders')->get();
        return view('tentang', compact('konf', 'founder'));
    }

    public function tentang_team()
    {
        $konf = DB::table('setting')->first();
        $founder = DB::table('team')->where('jabatan_team', '=', 'Board Of Founders')->get();
        $advisor = DB::table('team')->where('jabatan_team', '=', 'Board Of Advisor')->get();
        $core = DB::table('team')->where('jabatan_team', '=', 'Core Team')->get();

        return view('tentang_team', compact('konf', 'founder', 'advisor', 'core'));
    }
    public function beritas()
    {
        $konf = DB::table('setting')->first();
        $beritas = DB::table('berita')->orderByDesc('id_berita')->get();
        return view('beritas', compact('beritas', 'konf'));
    }


    public function detailproject($slug)
    {
        $listproject = DB::table('project')->orderByDesc('id_project')->limit(8)->get();
        $konf = DB::table('setting')->first();
        $proj = DB::table('project')
            ->where('slug_project', $slug)
            ->first();
        $project = DB::table('project')->orderByDesc('id_project')->get();
        return view('project-details', compact('konf', 'proj', 'listproject', 'project'));
    }

    public function lihatproject()
    {
        $project = DB::table('project')->orderByDesc('id_project')->get();
        $konf = DB::table('setting')->first();
        return view('projects', compact('konf', 'project'));
    }

    public function support()
    {
        $konf = DB::table('setting')->first();
        $rekening = DB::table('rekening')->orderByDesc('id_rekening')->get();
        return view('support', compact('konf', 'rekening'));
    }

    public function lihatpartner()
    {
        $konf = DB::table('setting')->first();
        $pemerintah = DB::table('partner')->where('kategori_partner', '=', 'Pemerintah')->get();
        $komunitas = DB::table('partner')->where('kategori_partner', '=', 'Komunitas')->get();
        $usaha = DB::table('partner')->where('kategori_partner', '=', 'Usaha')->get();
        $pendidikan = DB::table('partner')->where('kategori_partner', 'Pendidikan')->get();
        return view('lihat-partner', compact('pendidikan', 'usaha', 'komunitas', 'pemerintah', 'konf'));
    }

    public function lihatubis()
    {
        $konf = Setting::first();
        $ubis = DB::table('unit_bisnis')->orderByDesc('id_unit_bisnis')->get();
        return view('unit-bisnis', compact('ubis', 'konf'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
