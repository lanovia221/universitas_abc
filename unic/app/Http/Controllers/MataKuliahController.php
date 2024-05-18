<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validasi input jika diperlukan
         $request->validate([
            'nama' => 'required|string',
            'hari' => 'required|string',
            'mulaikelas' => 'required|string',
            'berakhirkelas' => 'required|string',
            'sks' => 'required|integer',
            'ruangkelas' => 'required|string',
        ]);
    
        // Buat mata kuliah baru
        $mataKuliah = new MataKuliah;
        $mataKuliah->nama = $request->nama;
        $mataKuliah->hari = $request->hari;
        $mataKuliah->mulai_kelas = $request->mulai_kelas;
        $mataKuliah->berakhir_kelas = $request->berakhir_kelas;
        $mataKuliah->sks = $request->sks;
        $mataKuliah->ruang_kelas = $request->ruang_kelas;
        $mataKuliah->save();
    
        // Redirect atau tampilkan pesan sukses
        MataKuliah::create($validateData);
        $request->session()->flash('pesan', "penambahan data{$validateData['nama']} Success")
        return redirect()->route('matakuliah.tampil')->with('success', 'Mata kuliah berhasil disimpan.');
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
    }
}
