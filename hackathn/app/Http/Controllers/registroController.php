<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registro.index');
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
        if($avatar = User::setAvatar($request->avatar))
        $request->request->add(['avatar'=>$avatar]);

        $users = new User();
        $users ->name       = $request->input('name');
        $users ->lastName   = $request->input('lastName');
        $users ->rol        = $request->input('rol');
        $users ->semestre    = $request->input('semestre');
        $users ->carrera    = $request->input('carrera');
        $users ->matricula  = $request->input('matricula');
        $users ->equipoName = $request->input('equipoName');
        $users ->equipoNumber = $request->input('equipoNumber');
        $users ->email = $request->input('email');
        $users ->proyectoName = '404';
        $users ->lastName = $request->input('lastName');
        $users ->password = Hash::make($request->input('password'));
        $users->avatar= $avatar;
        $users->save();
        return redirect()->route('home');

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
        //
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
        //
    }
}
