<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobi;
use Session;

class HobiController extends Controller
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
        $hobi = Hobi::all();
        return view('hobi.index', compact('hobi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hobi = new Hobi;
        $hobi->hobi = $request->hobi;
        $hobi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$hobi->hobi</b>"
        ]);
        return redirect()->route('hobi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.show', compact('hobi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.edit', compact('hobi'));
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
        $hobi = Hobi::findOrFail($id);
        $hobi->hobi = $request->hobi;
        $hobi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$hobi->hobi</b>"
        ]);
        return redirect()->route('hobi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hobi = Hobi::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data Berhasil dihapus"
        ]);
        return redirect()->route('hobi.index');
    }
}
