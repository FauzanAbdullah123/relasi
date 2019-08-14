<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Customer;
use App\Minuman;
use App\Makanan;
use Session;

class TransaksiController extends Controller
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
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        $minuman = Minuman::all();
        $makanan = Makanan::all();
        return view('transaksi.create', compact('customer','minuman','makanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->id_customer = $request->id_customer;
        $transaksi->id_minuman = $request->id_minuman;
        $transaksi->id_makanan = $request->id_makanan;
        $transaksi->jmlh_makanan = $request->jmlh_makanan;
        $transaksi->jmlh_minuman = $request->jmlh_minuman;
        $transaksi->ttl_harga = $request->ttl_harga;
        $transaksi->tgl_pesan = $request->tgl_pesan;
        $transaksi->tgl_kirim = $request->tgl_kirim;
        $transaksi->alamat_tujuan = $request->alamat_tujuan;
        $transaksi->kota_tujuan = $request->kota_tujuan;
        $transaksi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$transaksi->id_customer</b>"
        ]);
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $customer = Customer::all();
        $minuman = Minuman::all();
        $makanan = Makanan::all();
        return view('transaksi.show', compact('transaksi','customer','minuman','makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $customer = Customer::all();
        $minuman = Minuman::all();
        $makanan = Makanan::all();
        return view('transaksi.edit', compact('transaksi','customer', 'minuman','makanan'));
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
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_customer = $request->id_customer;
        $transaksi->id_minuman = $request->id_minuman;
        $transaksi->id_makanan = $request->id_makanan;
        $transaksi->jmlh_makanan = $request->jmlh_makanan;
        $transaksi->jmlh_minuman = $request->jmlh_minuman;
        $transaksi->ttl_harga = $request->ttl_harga;
        $transaksi->tgl_pesan = $request->tgl_pesan;
        $transaksi->tgl_kirim = $request->tgl_kirim;
        $transaksi->alamat_tujuan = $request->alamat_tujuan;
        $transaksi->kota_tujuan = $request->kota_tujuan;
        $transaksi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$transaksi->id_customer</b>"
        ]);
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('transaksi.index');
    }
}
