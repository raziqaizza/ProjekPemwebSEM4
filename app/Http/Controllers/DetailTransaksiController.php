<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pegawai;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        $dataObat = Obat::all();
        $dataPegawai = Pegawai::all();
        $detailTransaksi = DetailTransaksi::join('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->join('pegawai', 'detail_transaksi.pegawai_id', '=', 'pegawai.id')
            ->join('obat', 'detail_transaksi.id', '=', 'obat.id')
            ->select('detail_transaksi.*')
            ->get();
        return view('Transaksi.input-transaksi', compact('dataObat', 'dataPegawai', 'transaksi', 'detailTransaksi'));
    }


    public function store(Request $request)
    {
        $ob = DB::table('obat')->where('nama_obat', $request->nama_obat)->first();
        $peg = DB::table('pegawai')->where('nama', $request->nama)->first();
        
        if ($ob && $ob->stok < $request->jumlah) {
            alert()->error('Transaksi Gagal!', 'Stok obat tidak mencukupi. Jumlah obat tersisa ' . $ob->stok);
            return redirect()->route('input-transaksi');
        } else if ($request->jumlah <= 0) {
            alert()->error('Transaksi Gagal!', 'Jumlah obat tidak boleh kosong');
            return redirect()->route('input-transaksi');
        }
        
        $transaksi = Transaksi::create([
            'nama_pembeli' => $request->nama_pembeli
        ]);
        $transaksiId = $transaksi->id;
        DB::table('detail_transaksi')->insert([
            'transaksi_id' => $transaksiId,
            'pegawai_id' => $peg->id,
            'id_obat' => $ob->id,
            'jumlah' => $request->jumlah
        ]);
        Alert::success('Transaksi berhasil ditambah!');
        return redirect('data-transaksi');
        // $transaksiId = DB::table('transaksi')->insertGetId([
        //     'nama_pembeli' => $request->nama_pembeli
        // ]);
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ob = DetailTransaksi::findorfail($id);
        $idTransaksiDelete = $ob->transaksi_id;
        $ob->delete();
        $ob2 = Transaksi::findorfail($idTransaksiDelete);
        $ob2->delete();
        Alert::success('Transaksi berhasil dihapus!');
        return back();
    }
}