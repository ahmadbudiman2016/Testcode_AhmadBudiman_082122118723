<?php

namespace App\Http\Controllers;

use App\Pelayan;
use Illuminate\Http\Request;

class PelayanController extends Controller
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
                $pelayan = \App\pelayan::where('nama','LIKE','%'.$request->cari.'%')->get();
            } else {
                $pelayan = \App\pelayan::all();
            }
        return view("pelayan.index", ['pelayan' => $pelayan]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelayan $pelayan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelayan $pelayan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelayan $pelayan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelayan $pelayan)
    {
        //
    }
}
