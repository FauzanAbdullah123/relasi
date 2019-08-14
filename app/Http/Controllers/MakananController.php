<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use App\Supplier;
use Session;

class MakananController extends Controller
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
        $makanan = Makanan::with('supplier')->get();
        return view('makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('makanan.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $makanan = new Makanan;
        $makanan->id_supplier = $request->id_supplier;
        $makanan->nm_makanan = $request->nm_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        $makanan->stok_makanan = $request->stok_makanan;
        $makanan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$makanan->nm_makanan</b>"
        ]);
        return redirect()->route('makanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $makanan = Makanan::findOrFail($id);
        return view('makanan.show', compact('makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makanan = Makanan::findOrFail($id);
        $supplier = Supplier::all();
        return view('makanan.edit', compact('supplier', 'makanan'));
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
        $makanan = Makanan::findOrFail($id);
        $makanan->id_supplier = $request->id_supplier;
        $makanan->nm_makanan = $request->nm_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        $makanan->stok_makanan = $request->stok_makanan;
        $makanan->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$makanan->nm_makanan</b>"
        ]);
        return redirect()->route('makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan = Makanan::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('makanan.index');
    }
}
