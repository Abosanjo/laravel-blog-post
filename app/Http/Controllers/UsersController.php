<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;



class UsersController extends Controller
{
  public function index()
  {
      return view('users.index')->with('users', User::all());
  }


    public function edit()
    {
        return view('users.edit')->with('user',auth()->user());
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $this->validate($request,[
            'name' => 'required|string|max:191',

        ]);

        if($request->hasFile('photo')){
    		$photo = $request->file('photo');
    		$filename = time() . '.' . $photo->getClientOriginalExtension();
    		Image::make($photo)->resize(300, 300)->save( public_path('/img/profile/' . $filename ) );


    		$user->photo = $filename;
    		$user->save();
    	}


        session()->flash('success','User pdated successfully.');


        return redirect()->back();
    }



    public function makeAdmin(User $user)
    {
        $user->role = 'admin';

        $user->save();

        session()->flash('success','User made admin successfully.');


        return redirect(route('users.index'));
    }
}
