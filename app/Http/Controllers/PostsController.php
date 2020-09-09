<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;
use Storage;
use File;
use Image;

class PostsController extends Controller
{
  public function __construct()
    {

       $this->middleware('verifyCategoriesCount')->only(['create','store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $query = Post::orderBy('id','DESC')->with('user');
              if(Auth::user()->hasRole('admin')){
                   $query=$query->where('user_id', Auth::user()->id);
               }

               $posts = $query->paginate(5);

      return view('posts.index',compact('posts'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories',Category::all());
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
        'title' => 'required|unique:posts',

          'description' => 'required',

          //'image' => 'required|image',

          'content' => 'required'
           ]);

    //  $image = $request->image->store('posts');

    if ($request['image']) {
             $image=$request['image'];
             $extension=$image->getClientOriginalExtension();
             $name = time().'_' .$image->getClientOriginalName();
             Storage::disk('public')->put($name , File::get($image));
            // $post->image=$name;
           } else {
          //   $post->image='default.jpg';

           }

      $post = Post::create([

          'title' => $request->title,

          'description' => $request->description,

          'content' => $request->content,

          'image'=>$name,

          'publish_at' =>$request->publish_at,

          'category_id'=>$request->category,

          'user_id' => auth()->user()->id,


      ]);


      session()->flash('success','Post created successfully.');

      return redirect(route('posts.index'));
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
     public function edit(Post $post)
     {

         return view('posts.create')->with('post',$post)->with('categories',Category::all());
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $this->validate($request,[
          'title' => 'required|unique:posts',

            'description' => 'required',

            //'image' => 'required|image',

            'content' => 'required'
             ]);


      $datd =$request->only(['title','description','publish_at','content']);

     if($request->hasFile('image')){

       if ($request['image']) {
                $image=$request['image'];
                $extension=$image->getClientOriginalExtension();
                $name = time().'_' .$image->getClientOriginalName();
                Storage::disk('public')->put($name , File::get($image));
               // $post->image=$name;
              } else {
             //   $post->image='default.jpg';

              }
         //$post->deleteImage();

         $datd['image'] = $name;
 }


     $post->update($datd);

     session()->flash('success','Post updated successfully.');

     return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();

      session()->flash('success','Post deleted successfully.');

      return redirect(route('posts.index'));
    }
}
