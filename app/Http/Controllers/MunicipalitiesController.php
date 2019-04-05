<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Municipality;
use Laracast\Flash\Flash;
use Validator;
use Illuminate\Validation\Rule;

class MunicipalitiesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $munic = Municipality::orderBy('id', 'ASC')->paginate(8);
        return view ('docente.municipio.index')->with('munici', $munic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('docente.municipio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $munic = new Municipality ($request->all());
        $munic->save();

        flash("Se ha registrado el municipio ". $munic->name . " de forma exitosa!" )->success();
        return redirect()->route('munic.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $munic = Municipality::find($id);
        return view ('docente.municipio.edit')->with('munici', $munic);
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
        $munic = Municipality::find($id);
        $munic->name = $request->name;
        $munic->save();

        flash("Se ha modificado el municipio " . $munic->name . " de forma exitosa!")->warning();
        return redirect()->route('munic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $munic = Municipality::find($id);
        $munic->delete();

        flash("Se ha eliminado el municipio ". $munic->name . " de forman exitosa!")->error();
        return redirect()->route('munic.index');
    }
}
