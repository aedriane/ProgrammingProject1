<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function faq()
    {
      return view('faq');
    }

    public function index()
    {
      $locations=DB::table('jobs')->distinct()->select('location')->get();
      $classifications=DB::table('jobs')->distinct()->select('classification')->get();
      $workTypes=DB::table('jobs')->distinct()->select('workType')->get();

      return view('auth.register', compact('locations', 'classifications', 'workTypes'));
    }

    public function login()
    {
      return view('auth.login');
    }
}
