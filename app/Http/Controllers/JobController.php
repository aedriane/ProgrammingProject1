<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Auth;
use Carbon;
use Session;
use Illuminate\Database\Query\Builder;

use App\Http\Requests\JobRequest;

class JobController extends Controller
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
        $jobs = Jobs::orderBy('created_at', 'asc')
        ->Paginate(5);

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        Jobs::create($request->all());
        return redirect()->route('jobs.index')->with('message','Job has been added successfully');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //   $jobs = DB::table('jobs')
    //   ->where('id', $id)->get();
    //
    //     return view('jobs.show', compact('jobs'));
    // }
    public function show($id)
    {
       $jobs = Jobs::findOrFail($id);
        return view('jobs.show', compact('jobs'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $jobs = Jobs::findOrFail($id);
        return view('jobs.edit',compact('jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {

        $jobs = Jobs::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'classification' => 'required',
            'workType' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $jobs->fill($input)->save();

        return redirect()->route('jobs.index')->with('message','Job has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $jobs = Jobs::findOrFail($id);

      $jobs->delete();

      return redirect()->route('jobs.index')->with('message','Job has been deleted successfully');

    }
}
