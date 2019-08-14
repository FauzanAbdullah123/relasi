<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;
use Session;

class MahasiswaController extends Controller
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
        $mhs = Mahasiswa::with('dosen')->get();
        return view('mahasiswa.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        $hobi = Hobi::all();
        return view('mahasiswa.create', compact('dosen', 'hobi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mhs = new Mahasiswa;
        $mhs->nama = $request->nama;
        $mhs->nim = $request->nim;
        $mhs->id_dosen = $request->id_dosen;
        $mhs->save();
        $mhs->hobi()->attach($request->hobi);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$mhs->nama</b>"
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $dosen = Dosen::all();
        $hobi = Hobi::all();
        $selected = $mhs->hobi->pluck('id')->toArray();
        return view('mahasiswa.edit', compact('selected', 'dosen', 'mhs', 'hobi'));
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
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->nama = $request->nama;
        $mhs->nim = $request->nim;
        $mhs->id_dosen = $request->id_dosen;
        $mhs->save();
        $mhs->hobi()->sync($request->hobi);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$mhs->nama</b>"
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->hobi()->detach($mhs->id);
        $mhs->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('mahasiswa.index');
    }
}
