<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\proyecto;
class proyectoController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
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
        $users = DB::table('proyectos')
        //->where('avatar', auth()->user()->avatar)
        ->Where('equipoNumber', auth()->user()->equipoNumber)
        //->WhereNotIn("id", [auth()->user()->id])
        ->get(); 
        
        return view('proyecto.index', compact('users'));
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
        try{

      
        $users = new proyecto();
        $users ->proyectoName        = $request->input('proyectoName');
        $users ->equipoNumber        = auth()->user()->equipoNumber;
        $users ->modifico            = auth()->user()->matricula; 
        $users ->categoria           = $request->input('categoria');
        $users ->problematica        = $request->input('problematica');
        $users ->innovacion          = $request->input('innovacion');
        $users ->propuestaValor      = $request->input('propuestaValor');
        $users ->canalesDistribucion = $request->input('canalesDistribucion');
        $users ->segmentoMercado     = $request->input('segmentoMercado');
        $users ->recusosClave        = $request->input('recursosClave');
        $users ->sociosClave         = $request->input('sociosClave');
        $users->save();
        return back();
    } catch (\Illuminate\Database\QueryException $e) {
        return view('errors.230002');
    }   


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
