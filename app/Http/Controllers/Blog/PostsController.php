<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Category;

class PostsController extends Controller
{
  public function show(Post $post)
  {
      return view('blog.show')->with('categories', Category::all())->with('post',$post);
  }

  public function category(Category $category)
    {

        return view('blog.category')
        ->with('category',$category)
        ->with('posts',$category->posts()->searched()->simplePaginate(6))
        ->with('categories', Category::all());
    }

}
