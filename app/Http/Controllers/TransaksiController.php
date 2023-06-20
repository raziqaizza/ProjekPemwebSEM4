<?php
namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Supplier;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksiDetail = DB::table('detail_transaksi')
            ->select('detail_transaksi.id', 'pegawai.nama', 'transaksi.tglbeli', 'transaksi.nama_pembeli', 'detail_transaksi.jumlah', 'obat.nama_obat')
            ->join('pegawai', 'detail_transaksi.pegawai_id', '=', 'pegawai.id')
            ->join('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id')
            ->join('obat', 'obat.id', '=', 'detail_transaksi.id_obat')
            ->get();
        return view('Transaksi.data-transaksi', compact('transaksiDetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        return view('Transaksi.input-transaksi', compact('transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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

    }

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
        $ob = Transaksi::findorfail($id);
        $ob->delete();
        Alert::success('Transaksi berhasil dihapus!');
        return redirect('data-transaksi');
    }
}