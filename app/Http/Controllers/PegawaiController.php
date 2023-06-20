<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPegawai = Pegawai::paginate(5);
        return view('Pegawai.data-pegawai', compact('dataPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pegawai.input-pegawai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alert::success('Berhasil menambah pegawai!');
        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr
        ]);
        return redirect('data-pegawai');
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
    public function edit($id)
    {
        $peg = Pegawai::findorfail($id);
        return view('Pegawai.ubah-pegawai', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $peg = Pegawai::findorfail($id);
        $peg->update($request->all());
        Alert::success('Data berhasil diubah!');
        return redirect('data-pegawai');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peg = Pegawai::findorfail($id);
        $peg->delete();
        Alert::success('Data berhasil dihapus!');
        return back();
    }
}