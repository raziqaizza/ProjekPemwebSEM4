<?php
namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataObat = Obat::with('supplier')->paginate(5);
        return view('Obat.data-obat', compact('dataObat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supp = Supplier::all();
        return view('Obat.input-obat', compact('supp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Obat::create([
            'nama_obat' => $request->nama_obat,
            'kode_obat' => $request->kode_obat,
            'supplier_id' => $request->supplier_id,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
        Alert::success('Obat berhasil ditambah!');
        return redirect('data-obat');
        // $nama_obat = $request->nama_obat;
        // $kode_obat = $request->kode_obat;
        // $supplier_id = $request->supplier_id;
        // $stok = $request->stok;
        // $harga = $request->harga;
        // Memanggil stored procedure untuk membuat data user
        // $query = "CALL sp_insert_obat(?, ?, ?, ?, ?)";
        // $bindings = [$nama_obat, $kode_obat, $supplier_id, $stok, $harga];
        // DB::statement($query, $bindings);
        // return redirect('data-obat');
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
        $supp = Supplier::all();
        $ob = Obat::with('supplier')->findorfail($id);
        return view('Obat.ubah-obat', compact('ob', 'supp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ob = Obat::findorfail($id);
        $ob->update($request->all());
        Alert::success('Data berhasil diubah!');
        return redirect('data-obat');
        // $nama_obat = $request->nama_obat;
        // $kode_obat = $request->kode_obat;
        // $supplier_id = $request->supplier_id;
        // $stok = $request->stok;
        // $harga = $request->harga;
        // DB::statement('CALL sp_update_obat(:p_id, :p_nama_obat, :p_kode_obat, :p_supplier_id, :p_stok, :p_harga)', [
        //     'p_id' => $id,
        //     'p_nama_obat' => $nama_obat,
        //     'p_kode_obat' => $kode_obat,
        //     'p_supplier_id' => $supplier_id,
        //     'p_stok' => $stok,
        //     'p_harga' => $harga
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ob = Obat::findorfail($id);
        $ob->delete();
        Alert::success('Obat berhasil dihapus!');
        return back();
        // DB::statement('CALL sp_delete_obat(:id)', ['id' => $id]);
    }
}