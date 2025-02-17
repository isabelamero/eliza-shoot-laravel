<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imagem;
use App\Models\Portfolio;


class ImagensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagens = Imagem::all();
        $portfolios = Portfolio::all();
        $portfolios = Portfolio::all();
        return view('imagens.index', ['imagens' => $imagens, 'portfolios' => $portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('imagens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request ->file('imagem'));

        $fotografia = new Imagem();

        $fotografia ->titulo = $request->titulo;
        $fotografia ->categoria = $request->categoria;
        $fotografia ->imagem = $request->file('imagem')->store('imagens_fotografias', 'public');
        $fotografia ->save();

        return redirect('/imagens');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $imagem = Imagem::find($id);
        return view('imagens.edit', ['imagem'=>$imagem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $fotografia = Imagem::find($request->id);
        $fotografia ->titulo = $request->titulo;
        $fotografia ->categoria = $request->categoria;
        $fotografia ->imagem = $request->file('imagem')->store('imagens_fotografias', 'public');
        $fotografia ->save();

        return redirect('/imagens');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //dd($request->id);
        Imagem::destroy($request->id);
        return redirect('/imagens');
    }
}



