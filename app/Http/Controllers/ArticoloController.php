<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticoloRequest;
use App\Http\Requests\UpdateArticoloRequest;
use App\Models\Articolo;
use Illuminate\Http\Request;

class ArticoloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera tutti gli articoli
        $articoli = Articolo::all();
        // Passa gli articoli alla vista
        return view('articoli.index', compact('articoli'));
    }
    /**
     * Display the specified resource.
     */
    // Metodo per visualizzare un singolo articolo
    public function show($id)
    {
        // Recupera l'articolo per ID
        $articolo = Articolo::findOrFail($id);
        // Passa l'articolo alla vista
        return view('articoli.show', compact('articolo'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // empty
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // empty
    }
    /**

    2

    * Show the form for editing the specified resource.
    */
    public function edit(Articolo $articolo)
    {
        // empty
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articolo $articolo)
    {
        // empty
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articolo $articolo)
    {
        // empty
    }
}