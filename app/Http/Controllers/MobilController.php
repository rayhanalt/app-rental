<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mobil.index', [
            'data' => Mobil::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil.create', [
            'mobil' => Mobil::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nopol' => 'required|unique:mobil,nopol',
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'harga_sewa' => 'required',
            'gambar' => 'required|image|file|max:2048',
        ]);

        // Mendapatkan file gambar yang diupload
        $validasi['gambar'] = $request->file('gambar');

        // Menyimpan file ke direktori public/gambar
        $validasi['gambar']->move(public_path('gambar'), $validasi['gambar']->getClientOriginalName());

        Mobil::create([
            'nopol' => $validasi['nopol'],
            'merk' => $validasi['merk'],
            'model' => $validasi['model'],
            'tahun' => $validasi['tahun'],
            'warna' => $validasi['warna'],
            'harga_sewa' => $validasi['harga_sewa'],
            'gambar' => $validasi['gambar']->getClientOriginalName()
        ]);


        return redirect('/mobil')->with('success', 'New Data has been added!')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        return view('mobil.edit', [
            'item' => $mobil,
            'mobil' => Mobil::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        $validasi = $request->validate([
            'nopol' => 'required|unique:mobil,nopol',
            'merk' => 'required',
            'model' => 'required',
            'tahun' => 'required',
            'warna' => 'required',
            'harga_sewa' => 'required',
            'gambar' => 'required',
        ]);

        $mobil->update($validasi);

        return redirect('/mobil')->with('success', 'Data has been updated!')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        File::delete(public_path('gambar/' . $mobil->gambar));
        $mobil->delete();

        return redirect()->back()->with('success', 'Data has been deleted!');
    }
}
