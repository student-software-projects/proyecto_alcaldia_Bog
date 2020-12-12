<?php

namespace App\Http\Controllers\Localidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadController extends Controller
{
    public function index()
    {
        $localidades=Localidad::all();
        return view('localidad.index', compact('localidades'));
    }
    public function create()
    {
        return view('localidad.create');
    }
    public function store(Request $request)
    {
        $localidad=Localidad::create($request->all());
        return redirect()->route('localidad.index');
    }
    public function show($id)
    {
        $localidad=Localidad::find($id);
        return view('localidad.show', compact('localidad'));
    }
}
