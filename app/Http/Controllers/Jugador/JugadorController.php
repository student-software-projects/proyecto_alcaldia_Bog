<?php

namespace App\Http\Controllers\Jugador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function index()
    {
        $jugadores=Jugador::all();
        return view('jugador.index', compact('jugadores'));
    }
    public function create()
    {
        return view('jugador.create');
    }
    public function store(Request $request)
    {
        $jugador=Jugador::create($request->all());
        return redirect()->route('jugador.index');
    }
    public function show($id)
    {
        $jugador=Jugador::find($id);
        return view('jugador.show', compact('jugador'));
    }
}
