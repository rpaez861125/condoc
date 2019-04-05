<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Popularcouncil;
use App\Municipality;
use Laracast\Flash\Flash;
use Validator;
use Illuminate\Validation\Rule;

class PopularcouncilsController extends Controller
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
        $popul = Popularcouncil::orderBy('id', 'ASC')->paginate(8);
        $popul->each(function($popul){
            $popul->municipality;
        });
        return view ('docente.c_popular.index')->with('popula', $popul);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $munic = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        return view ('docente.c_popular.create')->with('munici', $munic);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $popul = new Popularcouncil($request->all());
        $popul->save();

        flash("Se ha regristrado el consejo popular " . $popul->name . " de forma exitosa!")->success();
        return redirect()->route('cons_pop.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $popul = Popularcouncil::find($id);
        $popul->municipality;

        $munic = Municipality::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('docente.c_popular.edit')
        ->with('munic', $munic)
        ->with('popul', $popul);
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
        $popul = Popularcouncil::find($id);
        $popul->fill($request->all());       
        $popul->save();

        flash("Se ha editado el consejo popular ". $popul->name . " de forma exitosa!" )->warning();
        return redirect()->route('cons_pop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popul = Popularcouncil::find($id);
        $popul->delete();

        flash("Se ha eliminado el consejo popular " . $popul->name . "de forma exitosa!")->error();
        return redirect()->route('cons_pop.index');
    }
}
