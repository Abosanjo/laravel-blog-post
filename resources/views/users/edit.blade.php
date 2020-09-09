@extends('layouts.master')

@section('content')
<div class="card card-primary">
                  <div class="card-header">My Profile
                    <img src="/img/profile/{{ $user->photo }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                <h2>{{ $user->name }}'s Profile</h2>
                  </div>

                <div class="card-body">

                @include('partials.error')
                   <form action="{{ route('profile.update-profile') }}" method="POST" enctype="multipart/form-data">

                   @csrf

                   @method('PUT')

                   <div class="form-group">

                   <label for="name">Name</label>
                   <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                   </div>
                   <div class="form-group">
                   <label for="photo">Image</label>
                   <input type="file" class="form-control" name="photo" id="photo">

                   </div>

                   <div class="form-group">
                   <label for="about">About Me</label>

                   <textarea name="about" id="about" cols="5" rows="5" class="form-control">{{ $user->about }}</textarea>

                   </div>

                   <button type="submit" class="btn btn-success">Update Profile</button>

                   </form>


                </div>
            </div>
@endsection
