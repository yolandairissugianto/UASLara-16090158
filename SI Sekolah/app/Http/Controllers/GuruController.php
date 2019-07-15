<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
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
        $data = Guru::all();
        return view ('pages.guru.guru', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nip' => 'required',
        //     'gambar' => 'required|max:2048|mimes:jpeg,png,jpg',
        //     'nama' => 'required'
        //     'tempat_lahir'
        // ]);

        $image_file = $request->file('gambar');
        $filename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/upload/guru');
        $image_file->move($destinationPath, $filename);
        $guru = new Guru();
        $guru->nip=$request->nip;
        $guru->gambar=$filename;
        $guru->nama=$request->nama;
        $guru->jk=$request->jk;
        $guru->tempat_lahir=$request->tempat_lahir;
        $guru->tanggal_lahir=$request->tanggal_lahir;
        $guru->pengampu = $request->pengampu;
        $guru->save();

        return redirect()->route('admin.guru')->with('create', 'Data berhasil ditambahkan !');
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
        $data = Guru::find($id);
        return view ('pages.guru.edit', compact('data'));
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
        $guru = Guru::find($id);
        $image_file = $request->file('gambar');
        if ($image_file =='') {
            $guru->gambar = $request->old_gambar;
        } else {
            $filename = time().'.'.$image_file->getClientOriginalExtension();
            $destinationPath = public_path('/upload/guru');
            $image_file->move($destinationPath, $filename);
            $guru->gambar=$filename;
        }
        $guru->nama=$request->nama;
        $guru->jk=$request->jk;
        $guru->tempat_lahir=$request->tempat_lahir;
        $guru->tanggal_lahir=$request->tanggal_lahir;
        $guru->update();

        return redirect()->route('admin.guru')->with('update', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru=Guru::find($id);
        $guru->delete();
        return redirect()->route('admin.guru')->with('delete', 'Data berhasil dihapus !');
    }
}
