<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ApplyController extends Controller
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
   * Handle a registration request for the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function apply(Request $request)
  {
      $user=Auth::User();

      return view('applyconfirmation') ?: $this->applied($request, $user);
  }

  /**
   * The user has applied for a job
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  mixed  $user
   * @return mixed
   */

   public function applied(Request $request, $user)
   {
       $user->notify(new ApplyConfirmationNotification($user));
   }
}
