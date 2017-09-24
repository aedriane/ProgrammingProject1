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
      $locations=DB::table('jobs')->distinct()->select('location')->get();
      $classifications=DB::table('jobs')->distinct()->select('classification')->get();
      $workTypes=DB::table('jobs')->distinct()->select('workType')->get();

      return view('search', compact('locations', 'classifications', 'workTypes'));
    }



    public function searchresults()
    {
      $locations=DB::table('jobs')->distinct()->select('location')->get();
      $classifications=DB::table('jobs')->distinct()->select('classification')->get();
      $workTypes=DB::table('jobs')->distinct()->select('workType')->get();

      $searchKeyword=Input::get('search');
      $searchLocation=Input::get('location');
      $searchClassification=Input::get('classification');
      $searchWorkType=Input::get('workType');

      $queried=DB::table('jobs')
      ->where(function($query) use ($searchKeyword)
      {
        $query->where('jobs.title', 'LIKE', '%'.$searchKeyword.'%');
        $query->orwhere('jobs.location', 'LIKE', '%'.$searchKeyword.'%');
      })

      ->where(function($query) use ($searchLocation)
      {
        $query->where('jobs.location', 'LIKE', '%'.$searchLocation.'%');
      })

      ->where(function($query) use ($searchClassification)
      {
        $query->where('jobs.classification', 'LIKE', '%'.$searchClassification.'%');
      })

      ->where(function($query) use ($searchWorkType)
      {
        $query->where('jobs.workType', 'LIKE', '%'.$searchWorkType.'%');
      })
      ->orderBy('jobs.created_at', 'asc')
      ->Paginate(5)
      ->setPath('');

      $pagination=$queried->appends(array
      (
        'search' => Input::get('search'),
        'location' => Input::get('location'),
        'classification' => Input::get('classification'),
        'workType' => Input::get('workType')
      ));

      if(count($queried) > 0)
      {
        return view('search', compact('locations', 'classifications', 'workTypes'))
        ->withDetails($queried)
        ->withQuery($searchKeyword, $searchLocation, $searchClassification, $searchWorkType);
      }

      else
      {
        return view('search',
        [
          'error' => 'error'
        ], compact('locations'));
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

        return view('vendor.profile.preferences', compact('users', 'locations', 'classifications', 'workTypes')) ;
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
