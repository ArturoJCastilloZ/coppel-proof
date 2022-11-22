<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prods = Product::all();
        return $prods;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Product();
        $prod->sku = $request->sku;
        $prod->articulo = $request->articulo;
        $prod->marca = $request->marca;
        $prod->modelo = $request->modelo;
        $prod->departamento = $request->departamento;
        $prod->clase = $request->clase;
        $prod->familia = $request->familia;
        $prod->stock = $request->stock;
        $prod->cantidad = $request->cantidad;
        $prod->descontinuado = $request->descontinuado;
        $prod->baja = $request->baja;
        $prod->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sku)
    {
        $prod = Product::find($sku);
        return $prod;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sku)
    {
        $prod = Product::findOrFail($request->sku);
        $prod->sku = $request->sku;
        $prod->articulo = $request->articulo;
        $prod->marca = $request->marca;
        $prod->modelo = $request->modelo;
        $prod->departamento = $request->departamento;
        $prod->clase = $request->clase;
        $prod->familia = $request->familia;
        $prod->stock = $request->stock;
        $prod->cantidad = $request->cantidad;
        $prod->descontinuado = $request->descontinuado;
        $prod->baja = $request->baja;
        $prod->save();
        return $prod;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sku)
    {
        $prod = Product::destroy($sku);
        return $prod;
    }
}
