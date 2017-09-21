<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Input;
use Auth;
use Carbon;
use Session;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function welcome()
    {
      return view('welcome');
    }

    public function register()
    {
        return view('authentication');
    }

    public function faq()
    {
      return view('faq');
    }

    public function recommendations()
    {


        $jobs=DB::table('jobs')
        ->where('jobs.location', '=', Auth::user()->location)
        ->where('jobs.classification', '=', Auth::user()->classification)
        ->where('jobs.workType', '=', Auth::user()->workType)
        ->orderByRaw("RAND()")
        ->take(3)
        ->get();

        return view('welcome', compact('jobs'));
    }

    public function search()
    {
      return view('search');
    }



    public function searchresults()
    {

      $search=Input::get('search');
      $queried=DB::table('jobs')
      ->where('title', 'LIKE', '%'.$search.'%')
      ->orWhere('location', 'LIKE', '%'.$search.'%')
      ->orWhere('classification', 'LIKE', '%'.$search.'%')
      ->orwhere('workType', 'LIKE', '%'.$search.'%')
      ->get();

      if(count($queried) > 0)
      {
        return view('search')
        ->withDetails($queried)
        ->withQuery($search);
      }

      else
      {
        return view('search',
        [
          'error' => 'error'
        ]);
      }
    }

    public function detailedjob($id)
    {
      $jobs = DB::table('jobs')
      ->where('id', $id)->get();

      return view('detailedjob', compact('jobs'));
    }

    public function showPreferences(Request $request)
    {
        // Get the current authenticated user object
        $user = User::find($request->user()->id);
        $locations=DB::table('jobs')->distinct()->select('location')->get();
        $classifications=DB::table('jobs')->distinct()->select('classification')->get();
        $workTypes=DB::table('jobs')->distinct()->select('workType')->get();

        return view('vendor.profile.preferences', ['user' => $user], compact('locations', 'classifications', 'workTypes')) ;
    }

    public function editPreferences(Request $request)
    {
        // Find the current authenticated user object
        $user = User::find($request->user()->id);

        if($request["location"])
        {
          $this->validate($request,
          [
            'location' => 'max:255'
          ]);
          $user->location = $request["location"];
        }

        if($request["classification"])
        {
          $this->validate($request,
          [
            'classification' => 'max:255'
          ]);
          $user->classification = $request["classification"];
        }

        if($request["workType"])
        {
          $this->validate($request,
          [
            'workType' => 'max:255'
          ]);
          $user->workType = $request["workType"];
        }

        $user->save();

        Session::flash('message', "Preferences Successfully Updated!");
        return redirect()->back();
    }



}
