<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;
use Auth;
use MrEssex\LaravelAuthProfile\routes;
use Carbon;

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




}
