<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use App\User;
use Laracast\Flash\Flash;
use Validator;
use Illuminate\Validation\Rule;

class UsersController extends Controller
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
        $users = User::orderBy('id', 'ASC')->paginate(8);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->pasword);
        $user->save();

        flash("Se ha registrado el usuario ". $user->name . " de forma exitosa!" )->success();
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
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
        $user = User::find($id);

        $validator =  Validator::make($request->all(), [
                        'email' => [
                        'required',
                        Rule::unique('users')->ignore($user->id),
                            ],
                        ]);
                            
        $user->name = $request->name;
        $user->last_name = $request->last_name;        
        if ($validator->fails()) {
            return redirect()->route('users.edit', $user )->withErrors($validator)->withInput();        
        }else{
          
            $user->email = $request->email;
            $user->user = $request->user;
            $user->rol = $request->rol;
            $user->unity = $request->unity;
            $user->active = $request->active;
            $user->save();
        }
       

        flash("Se ha editado el usuario ". $user->name . " de forma exitosa!" )->warning();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auth = Auth::user()->id;
        if ($auth == $id) {
            flash("No se puede eliminar el usuario conectado." )->error();
            return redirect()->route('users.index');
        } else {
            $user = User::find($id);
            $user->delete();
    
            flash("Se ha eliminado el usuario ". $user->name . " de forma exitosa!" )->error();
            return redirect()->route('users.index'); 
        }       
        
    }
}
