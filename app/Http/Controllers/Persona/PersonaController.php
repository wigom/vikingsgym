<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aux = new Persona();
        $this->authorize('view', $aux);
        //$cedulas = Cedula::orderBy('cedula', 'asc')->get();
        $cedula = Persona::findOrFail(2);
        $parametros = Persona::PARAMETROS;
        return view('cedula.index')
            ->with('cedulas', $cedula)
            ->with('parametros', $parametros)
            ->with('aux', $aux);
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
     * @param  \App\Models\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $cedula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $cedula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $cedula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $cedula)
    {
        //
    }
}
