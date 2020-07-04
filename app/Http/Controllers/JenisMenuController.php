<?php

namespace App\Http\Controllers;

use App\JenisMenu;
use Illuminate\Http\Request;

class JenisMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        {
            if ($request->has('cari')) {
                $jenisMenu = \App\JenisMenu::where('nama','LIKE','%'.$request->cari.'%')->get();
            } else {
                $JenisMenu = \App\JenisMenu::all();
            }
        return view("JenisMenu.index", ['JenisMenu' => $JenisMenu]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request->validate([
        'jenis' => 'required',
        'deskripsi' => 'required',
        ]);

        \App\menu::create($request->all());
        return redirect('/JenisMenu')->with('sukses','Data berhasil Diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function show(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisMenu $jenisMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisMenu  $jenisMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisMenu $jenisMenu)
    {
        //
    }
}
