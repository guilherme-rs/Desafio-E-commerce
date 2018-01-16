<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::get();
        return view ('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::get();
        return view ('produtos.create', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = Input::get('nome');
        $produto->categoria_id = Input::get('categoria');
        $produto->preco = Input::get('preco');
        $produto->quantidade = Input::get('quantidade');
        $produto->status = Input::get('status');
        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::get();

        return view('produtos.edit',[
           'id' => $produto->id,
           'nome' => $produto->nome,
           'categoria' => $produto->categoria_id,
           'preco' => $produto->preco,
           'quantidade' => $produto->quantidade,
           'status' => $produto->status,
           'categorias' => $categorias
        ]);
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
        $produto = Produto::find($id);
        $produto->nome = Input::get('nome');
        $produto->categoria_id = Input::get('categoria');
        $produto->preco = Input::get('preco');
        $produto->quantidade = Input::get('quantidade');
        $produto->status = Input::get('status');
        $produto->save();

        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->route('produtos.index');
    }
}
