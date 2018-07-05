<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = \App\Lote::all();
        return view('index', compact('lotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lote = new \App\Lote();
        $lote->designacao = $request->get('designacao');
        $lote->tipo = $request->get('tipo');
        $lote->quantidade = $request->get('quantidade');
        $lote->tamanho = $request->get('tamanho');
        $lote->genero = $request->get('genero');
        $lote->data_fabrico = $request->get('data_fabrico');
        $lote->genero = $request->get('genero');
        $lote->save();
        return redirect('lotes')->with('success', 'Lote guardado com sucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lote = \App\Lote::find($id);
        return view('editar', compact('lote', 'id'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lote = \App\Lote::find($id);
        $lote->quantidade=$request->get('quantidade');
        $lote->save();
        return redirect('lotes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lote = \App\Lote::find($id);
        $lote->delete();
        return redirect('lotes');
    }
}
