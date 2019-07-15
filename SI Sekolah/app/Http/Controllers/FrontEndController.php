<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Guru;
use App\Siswa;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function beranda() {
        $beritas = Berita::all();
        $beritaTerkinis = Berita::orderBy('created_at')->paginate(4);
        return view('front-end.index', [
            'beritas' => $beritas,
            'beritaTerkinis' => $beritaTerkinis,
        ]);
    }

    public function guru() {
        $gurus = Guru::all();
        $beritaTerkinis = Berita::orderBy('created_at')->paginate(4);
        return view('front-end.data_guru', [
            'gurus' => $gurus,
            'beritaTerkinis' => $beritaTerkinis,
        ]);
    }

    public function siswa() {
        $siswas = Siswa::all();
        $beritaTerkinis = Berita::orderBy('created_at')->paginate(4);
        return view('front-end.data_siswa', [
            'siswas' => $siswas,
            'beritaTerkinis' => $beritaTerkinis,
        ]);
    }

    public function berita() {
        $beritas = Berita::all();
        $beritaTerkinis = Berita::orderBy('created_at')->paginate(4);
        return view('front-end.berita_front', [
            'beritas' => $beritas,
            'beritaTerkinis' => $beritaTerkinis
        ]);
    }

    public function hubungiKami() {
        $beritaTerkinis = Berita::orderBy('created_at')->paginate(4);
        return view('front-end.hubungi_kami', [
            'beritaTerkinis' => $beritaTerkinis
        ]);
    }

    public function detail($id) {
        $berita = Berita::where('id', $id)->first();
        $beritaTerkinis = Berita::orderBy('created_at')->paginate(4);
        return view('front-end.detail', [
            'berita' => $berita,
            'beritaTerkinis' => $beritaTerkinis
        ]);
    }
}
