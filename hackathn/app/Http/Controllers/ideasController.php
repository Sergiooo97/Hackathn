<?php

namespace App\Http\Controllers;
use App\idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ideasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $ideas = DB::table('ideas')
        //->where('avatar', auth()->user()->avatar)
        ->Where('equipoNumber', auth()->user()->equipoNumber)
        ->OrderBy('created_at', 'DESC')
        //->WhereNotIn("id", [auth()->user()->id])
        ->get(); 
        return view('ideas.index', compact('ideas'));
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
        
        $users = new idea();
        $users ->tituloIdea      = $request->input('tituloIdea');
        $users ->descripcion     = $request->input('descripcion');
        $users ->userName        = auth()->user()->name;
        $users ->equipoNumber    = auth()->user()->equipoNumber;
        $users->save();
         return back();

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
