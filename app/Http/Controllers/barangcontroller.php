<?php

namespace App\Http\Controllers;

use  App\Models\barang;
use  App\Models\kategori;
use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = barang::all();
        // dd($data);
        return view('tampilbarang', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('tambahbarang', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = $request->validate([
            'namabarang' => 'required',
            'kategori_id' => 'required|integer',
            'foto' => 'required',
            'harga' => 'required|integer',
            'descproduk' => 'required',
        ]);
        barang::create($validator);
        return redirect('barang')->with('success', 'Data berhasil ditambah!');
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
        //
        $data = barang::find($id);
        $kategori = kategori::all();
        return view('editbarang', compact('data', 'kategori'));
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
        //
        $validator = $request->validate([
            'namabarang' => 'required',
            'kategori_id' => 'required|integer',
            'foto' => 'required',
            'harga' => 'required|integer',
            'descproduk' => 'required',
        ]);
        barang::find($id)->update($validator);
        return redirect('barang')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        barang::find($id)->delete();
        return redirect('barang')->with('success', 'Data berhasil dihapus!');
    }
}
