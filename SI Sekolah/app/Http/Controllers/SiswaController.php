<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
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
        $data = Siswa::all();
        //dd($data);
        return view ('pages.siswa.siswa', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_file = $request->file('gambar');
        $filename = time().'.'.$image_file->getClientOriginalExtension();
        $destinationPath = public_path('/upload/siswa');
        $image_file->move($destinationPath, $filename);
        $siswa= new Siswa();
        $siswa->nis=$request->nis;
        $siswa->gambar=$filename;
        $siswa->nama=$request->nama;
        $siswa->jk=$request->jk;
        $siswa->kelas=$request->kelas;
        $siswa->alamat=$request->alamat;
        $siswa->save();

        return redirect()->route('admin.siswa')->with('create', 'Data berhasil ditambahkan !');
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
        $data = Siswa::find($id);
        return view ('pages.siswa.edit', compact('data'));
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
        
    
        $siswa= Siswa::find($id);
        $image_file = $request->file('gambar');
        if ($image_file =='') {
            $siswa->gambar = $request->old_gambar;
        } else {
            $filename = time().'.'.$image_file->getClientOriginalExtension();
            $destinationPath = public_path('/upload/siswa');
            $image_file->move($destinationPath, $filename);
            $siswa->gambar=$filename;
        }
        $siswa->nama=$request->nama;
        $siswa->jk=$request->jk;
        $siswa->kelas=$request->kelas;
        $siswa->alamat=$request->alamat;
        $siswa->update();

        return redirect()->route('admin.siswa')->with('update', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa=Siswa::find($id);
        $siswa->delete();
        return redirect()->route('admin.siswa')->with('delete', 'Data berhasil dihapus !');
    }
}
