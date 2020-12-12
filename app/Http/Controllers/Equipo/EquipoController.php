<?php

namespace App\Http\Controllers\Equipo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{

    public function index()
    {
        $equipos=Equipo::all();
        return view('equipo.index', compact('equipos'));
    }
    public function create()
    {
        return view('equipo.create');
    }
    public function store(Request $request)
    {
        $equipo=Equipo::create($request->all());
        return redirect()->route('equipo.index');
    }
    public function show($id)
    {
        $equipo=Equipo::find($id);
        return view('equipo.show', compact('equipo'));
    }
}
