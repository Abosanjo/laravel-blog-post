<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class AboutController extends Controller
{

    public function index()
    {


        return view('blog.about')->with('categories', Category::all());


    }
}
