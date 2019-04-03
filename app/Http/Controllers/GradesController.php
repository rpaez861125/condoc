<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Unit;
use App\Grade;
use Laracast\Flash\Flash;
use Validator;
use Illuminate\Validation\Rule;

class GradesController extends Controller
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
        $grades = Grade::orderBy('id', 'ASC')->paginate(8);
        $grades->each(function($grades){
            $grades->unit;
        });

        return view('docente.grades.index')->with('grades', $grades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = Unit::orderBy('number', 'ASC')->pluck('number', 'id');
        return view('docente.grades.create')->with('units', $unit);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grades = new Grade($request->all());
        $grades->save();

        flash("Se ha registrado el grado ". $grades->number . " de forma exitosa!" )->success();
        return redirect()->route('grades.index');
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
        $grade = Grade::find($id);
        $grade->unit;
           
        $unit = Unit::orderBy('number', 'ASC')->pluck('number', 'id');
        return view('docente.grades.edit')
        ->with('units', $unit)
        ->with('grades', $grade);
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
        $grade = Grade::find($id);
        $grade->fill($request->all());       
        $grade->save();

        flash("Se ha editado el grado ". $grade->number . " de forma exitosa!" )->warning();
        return redirect()->route('grades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::find($id);
        $grade->delete();

        flash("Se ha eliminado el grado ". $grade->number . " de forma exitosa!" )->error();
        return redirect()->route('grades.index'); 
    }
}
