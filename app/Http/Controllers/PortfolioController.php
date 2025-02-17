<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolio.index', ['portfolios' => $portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.create'); // Corrigido para apontar para a pasta portfolio
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->titulo = $request->titulo;
        $portfolio->categoria = $request->categoria;
        $portfolio->imagem = $request->file('imagem')->store('portfolio_imagens', 'public'); // Incluindo o campo de imagem
        $portfolio->save();

        return redirect('/imagens');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::find($id);
        return view('portfolio.edit', ['portfolio' => $portfolio]); // Corrigido para apontar para a pasta portfolio
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $portfolio = Portfolio::find($request->id);
        $portfolio->titulo = $request->titulo;
        $portfolio->categoria = $request->categoria;
        $portfolio->imagem = $request->file('imagem')->store('portfolio_imagens', 'public'); // Incluindo o campo de imagem
        $portfolio->save();

        return redirect('/imagens');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Portfolio::destroy($request->id);
        return redirect('/imagens');
    }
}
