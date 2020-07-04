<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
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
                $menu = \App\menu::where('nama','LIKE','%'.$request->cari.'%')->get();
            } else {
                $menu = \App\menu::all();
            }
        return view("menu.index", ['menu' => $menu]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
        'kode_jenis' => 'required',
        'nama' => 'required',
        'harga' => 'required',
        ]);

        \App\menu::create($request->all());
        return redirect('/menu')->with('sukses','Data berhasil Diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = \App\menu::find($id);
        return view('menu/edit',['menu' => $menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $menu = \App\menu::find($id);
        $menu->update($request->all());
        return redirect('/menu')->with('sukses','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $menu = \App\menu::find($id);
        $menu->delete($menu);
        return redirect('/menu')->with('sukses','Data Berhasil Di Delete');
    }
}
