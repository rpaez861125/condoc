<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Unit;
use Laracast\Flash\Flash;
use Validator;
use Illuminate\Validation\Rule;

class UnitsController extends Controller
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
        $unit = Unit::orderBy('id', 'ASC')->paginate(8);
        return view('docente.unit.index')->with('unity', $unit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unit = new Unit ($request->all());
        $unit->save();

        flash("Se ha registrado la unidad ". $unit->number . " de forma exitosa!" )->success();
        return redirect()->route('units.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $units = Unit::find($id);
        return view('docente.unit.edit')->with('units', $units);
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
        $units = Unit::find($id);
        $units->number = $request->number;
        $units->save();

        flash("Se ha editado la unidad ". $units->number . " de forma exitosa!" )->warning();
        return redirect()->route('units.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        flash("Se ha eliminado la unidad ". $unit->number . " de forma exitosa!" )->error();
        return redirect()->route('units.index'); 
    }
}
