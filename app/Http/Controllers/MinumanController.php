<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minuman;
use App\Supplier;
use Session;

class minumanController extends Controller
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
        $minuman = Minuman::with('supplier')->get();
        return view('minuman.index', compact('minuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('minuman.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $minuman = new Minuman;
        $minuman->id_supplier = $request->id_supplier;
        $minuman->nm_minuman = $request->nm_minuman;
        $minuman->harga_minuman = $request->harga_minuman;
        $minuman->stok_minuman = $request->stok_minuman;
        $minuman->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$minuman->nm_minuman</b>"
        ]);
        return redirect()->route('minuman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $minuman = Minuman::findOrFail($id);
        return view('minuman.show', compact('minuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $minuman = Minuman::findOrFail($id);
        $supplier = Supplier::all();
        return view('minuman.edit', compact('supplier', 'minuman'));
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
        $minuman = Minuman::findOrFail($id);
        $minuman->id_supplier = $request->id_supplier;
        $minuman->nm_minuman = $request->nm_minuman;
        $minuman->harga_minuman = $request->harga_minuman;
        $minuman->stok_minuman = $request->stok_minuman;
        $minuman->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$minuman->nm_minuman</b>"
        ]);
        return redirect()->route('minuman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $minuman = Minuman::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('minuman.index');
    }
}
