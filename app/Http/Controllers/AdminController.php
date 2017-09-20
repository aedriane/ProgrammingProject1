<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function home()
  {
    return view('admin.home');
  }

  public function faq()
  {
    return view('admin.adminfaq');
  }
}
