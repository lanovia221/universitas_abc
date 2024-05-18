<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;


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
         // Ambil semua mata kuliah dari database
         $mataKuliahs = MataKuliah::all();
 
         // Tampilkan halaman daftar mata kuliah dengan data yang diambil
         return view('mata_kuliah.index', compact('mataKuliahs'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
         return redirect()->route('mata-kuliahs.index')->with('success', 'Mata kuliah berhasil disimpan.');
     }
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MataKuliah::where('matakuliahid', $id))->first();
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
