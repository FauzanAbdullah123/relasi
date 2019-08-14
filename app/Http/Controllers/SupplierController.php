<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Session;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplier;
        $supplier->nm_supplier = $request->nm_supplier;
        $supplier->kota_supplier = $request->kota_supplier;
        $supplier->alamat_supplier = $request->alamat_supplier;
        $supplier->no_tlp_supplier = $request->no_tlp_supplier;
        $supplier->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$supplier->nm_supplier</b>"
        ]);
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
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
        $supplier = Supplier::findOrFail($id);
        $supplier->nm_supplier = $request->nm_supplier;
        $supplier->kota_supplier = $request->kota_supplier;
        $supplier->alamat_supplier = $request->alamat_supplier;
        $supplier->no_tlp_supplier = $request->no_tlp_supplier;
        $supplier->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$supplier->nm_supplier</b>"
        ]);
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data Berhasil dihapus"
        ]);
        return redirect()->route('supplier.index');
    }
}
