<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSupplier = Supplier::paginate(5);
        return view('Supplier.data-Supplier', compact('dataSupplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Supplier.input-supplier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Supplier::create([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'nomor_telepon' => $request->nomor_telepon
        ]);
        return redirect('data-supplier');
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
        $sup = Supplier::findorfail($id);
        return view('Supplier.ubah-supplier', compact('sup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sup = Supplier::findorfail($id);
        $sup->update($request->all());
        return redirect('data-supplier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sup = Supplier::findorfail($id);
        $sup->delete();
        return back();
    }
}