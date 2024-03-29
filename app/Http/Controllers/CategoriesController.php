<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('categories.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
          'name' => 'required|string|max:191|unique:categories'
          //'email' => 'required|string|email|max:191|unique:users',

           ]);

           Category::create([
            'name'=>$request->name
        ]);


        session()->flash('success','Category created successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
      return view('categories.create')->with('category',$category);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Category $category)
     {
       $this->validate($request,[
           'name' => 'required|string|max:191|unique:categories'
           //'email' => 'required|string|email|max:191|unique:users',

            ]);

        $category->update([
            'name' => $request->name
        ]);
        // $category->name = $request->name;

         //$category->save();


         session()->flash('success','Category updated successfully.');

         return redirect(route('categories.index'));


     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Category $category)
       {
          if($category->posts->count() > 0 ){

          session()->flash('error','Category cannot be deleted becuase it has some posts.');

           return redirect()->back();

         }

           $category->delete();

           session()->flash('success','Category deleted successfully.');

           return redirect(route('categories.index'));
       }
}
