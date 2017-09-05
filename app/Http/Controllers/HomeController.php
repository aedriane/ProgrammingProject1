<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use MrEssex\LaravelAuthProfile\routes;

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

    public function index()
    {
      $locations=DB::table('jobs')->distinct()->select('location')->get();
      $classifications=DB::table('jobs')->distinct()->select('classification')->get();

      return view('profile', compact('locations', 'classifications'));
    }

    public function recommendations()
    {


        $jobs=DB::table('jobs')
        ->where('jobs.location', '=', Auth::user()->location)
        ->where('jobs.classification', '=', Auth::user()->classification)
        ->orderByRaw("RAND()")
        ->take(3)
        ->get();


      return view('welcome', compact('jobs'));
    }




}
