<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use App\Models\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
{

    public function index()
    {
        //
    }


    public function hdetalle($articulo_id)

    {

        $pru = Articulos::find($articulo_id);
        return view('aviato.checkout', compact('pru'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Detalles $detalles)
    {
        //
    }


    public function edit(Detalles $detalles)
    {
        //
    }


    public function update(Request $request, Detalles $detalles)
    {
        //
    }


    public function destroy(Detalles $detalles)
    {
        //
    }
}
