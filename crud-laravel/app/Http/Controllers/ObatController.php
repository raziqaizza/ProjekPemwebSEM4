<?php
namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataObat = Obat::with('supplier')->latest()->paginate(5);
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
        return redirect('data-obat');
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
        return redirect('data-obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ob = Obat::findorfail($id);
        $ob->delete();
        return back();
    }
}