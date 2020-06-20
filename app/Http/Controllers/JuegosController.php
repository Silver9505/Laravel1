<?php

namespace App\Http\Controllers;

use App\Juegos;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juegos::all();
        return $juegos;
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
        $juegos = Juegos::create($request->all());
        return $juegos;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Juegos  $juegos
     * @return \Illuminate\Http\Response
     */
    public function show(Juegos $juegos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Juegos  $juegos
     * @return \Illuminate\Http\Response
     */
    public function edit(Juegos $juegos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juegos  $juegos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juegos $juegos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Juegos  $juegos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juegos $juegos)
    {
        //
    }
}
