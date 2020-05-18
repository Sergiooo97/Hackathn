<?php

namespace App\Http\Controllers;

use App\User;
use App\avatarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



class alumnoController extends Controller
{
    public $users;
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
        



        $users = DB::table('users')
        //->where('avatar', auth()->user()->avatar)
        ->orWhere('equipoNumber', auth()->user()->equipoNumber)
        ->WhereNotIn("id", [auth()->user()->id])
        ->get();
        return view('infoAlumno.index', compact('users'));

       
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
    public function store(Request $request){

        if($avatar = avatarModel::setAvatar($request->avatar))
        $request->request->add(['avatar'=>$avatar]);

        $avatarmodel = new avatarModel();
        $avatarmodel->avatar= $avatar;
        $avatarmodel->save();
        //avatarModel::create([
          //  'avatar' => $avatar
        //]);
    }
    

     

       
      //return $request->all();

       // $users = new users();
       // $users->avatar = $request->input('avatar');
        //$users->save()
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       
       $users = User::find($id)
        or $userss = DB::table('chats')
        //->where('avatar', auth()->user()->avatar)
        ->orWhere('equipoNumber', auth()->user()->equipoNumber)
        ->WhereNotIn("id", [auth()->user()->id])
        ->get();
        return view('infoAlumno.show', compact('users'));

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
        $users = User::find($id);
        
        if($avatar = User::setAvatar($request->avatar))
        $request->request->add(['avatar'=>$avatar]);

        $users->avatar = $request;
        $users->save();
        //User::create($request->all());
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
