<?php

namespace App\Http\Controllers;

use  App\Models\postingan;
use Illuminate\Http\Request;

class postingancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = postingan::all();
        // dd($data);
        return view('tampilpostingan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahpostingan');
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
            'judulpostingan' => 'required',
            'penulis' => 'required',
            'descpostingan' => 'required|string',
        ]);
        postingan::create($validator);
        return redirect('postingan')->with('success', 'Data berhasil ditambah!');
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
        $data = postingan::find($id);
        return view('editpostingan', compact('data'));
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
            'judulpostingan' => 'required',
            'penulis' => 'required',
            'descpostingan' => 'required|string',
        ]);
        postingan::find($id)->update($validator);
        return redirect('postingan')->with('success', 'Data berhasil diubah!');
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
        postingan::find($id)->delete();
        return redirect('postingan')->with('success', 'Data berhasil dihapus!');
    }
}
