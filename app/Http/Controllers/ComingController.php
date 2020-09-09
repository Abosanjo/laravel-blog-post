<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class ComingController extends Controller
{
  public function index()
  {


      return view('blog.coming-soon')->with('categories', Category::all());


  }
}
