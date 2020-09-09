<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class ContactController extends Controller
{
  public function index()
  {


      return view('blog.contact')->with('categories', Category::all());


  }
}
