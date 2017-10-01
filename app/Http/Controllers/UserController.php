<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::orderBy('created_at', 'asc')
        ->paginate(5);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations=DB::table('jobs')->distinct()->select('location')->get();
        $classifications=DB::table('jobs')->distinct()->select('classification')->get();
        $workTypes=DB::table('jobs')->distinct()->select('workType')->get();

        return view('users.create', compact('locations', 'classifications', 'workTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        Users::create($request->all());
        return redirect()->route('users.index')->with('message','User has been added successfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
        $users = Users::findOrFail($id);
         return view('users.show', compact('users'));
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $user)
    {
      $locations=DB::table('jobs')->distinct()->select('location')->get();
      $classifications=DB::table('jobs')->distinct()->select('classification')->get();
      $workTypes=DB::table('jobs')->distinct()->select('workType')->get();

        return view('users.edit',compact('user', 'locations', 'classifications', 'workTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, Users $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index')->with('message','User has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('message','User has been deleted successfully');

    }
}
