<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;

use App\Grade;
use App\Group;
use Illuminate\Http\Request;
use Laracast\Flash\Flash;
use Validator;
use Illuminate\Validation\Rule;

class GroupsController extends Controller
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
        $group = Group::orderBy('id', 'ASC')->paginate(8);
        $group->each(function($group){
            $group->grade;
        });

        return view('docente.groups.index')->with('groups' ,$group);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::orderBy('number', 'ASC')->pluck('number', 'id');
        return view ('docente.groups.create')->with('grades', $grades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groups = new Group($request->all());
        $groups->save();

        flash("Se ha registrado el grupo ". $groups->number . " de forma exitosa!" )->success();
        return redirect()->route('groups.index');
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
        $groups = Group::find($id);
        $groups->grade;

        $grades = Grade::orderBy('number', 'ASC')->pluck('number', 'id');
        return view('docente.groups.edit')
        ->with('grades', $grades)
        ->with('groups', $groups);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();

        flash("Se ha eliminado el grupo ". $group->number . " de forma exitosa!" )->error();
        return redirect()->route('groups.index'); 
    }
}
