<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Berita::all();
        return view('pages.berita.berita', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|max:2048|mimes:jpeg,png,jpg',
            'judul' => 'required|min:5',
            'isi_berita' => 'required'
        ]);
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi_berita;

        $gambar = $request->file('gambar')->store('berita');
        
        $berita->gambar = $gambar;
        $berita->save();
        return redirect()->route('admin.berita')->with('create', 'Data berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view ('pages.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|min:5',
            'isi_berita' => 'required',
            'gambar' => 'max:2048|mimes:jpeg,png,jpg'
        ]);

        $berita = Berita::where('id', $id)->first();
        $berita->judul = $request->judul;
        $berita->isi_berita = $request->isi_berita;
        if($request->gambar != null) {
            Storage::delete($berita->gambar);
            $gambar = $request->file('gambar')->store('berita');
            $berita->gambar = $gambar;
        }

        $berita->update();
        return redirect()->route('admin.berita')->with('update', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('admin.berita')->with('create', 'Data berhasil dihapus !');
    }
}
