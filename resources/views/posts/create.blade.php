@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-end mb-2" >


</div>
<div class="card card-primary">

<div class="card card-default">
<div class="card-header">

  {{ isset($post) ? 'Edit post' : 'Create post' }}

</div>

<div class="card-body">

  @include('partials.error')

  <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

        @if(isset($post))

         @method('PUT')


        @endif


        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ isset($post) ? $post->title : '' }}">

        </div>

        <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{ isset($post) ? $post->description : '' }}</textarea>

        </div>

        <div class="form-group">
        <label for="content">Content</label>

        <input id="content" type="hidden" name="content" value="{{ isset($post) ? $post->content : '' }}">
        <trix-editor input="content"></trix-editor>

        </div>


        <div class="form-group">
        <label for="publish_at">published At</label>
        <input type="text" class="form-control" name="publish_at" id="publish_at" value="{{ isset($post) ? $post->publish_at: '' }}">

        </div>

        @if(isset($post))

        <div class="form-group">

        <img src="/img/{{ $post->image }}" alt="" style="width: 60%">


        </div>

        @endif

        <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image" id="image">

        </div>

        <div class="form-group">
        <label for="category">Category</label>
        <select name="category" id="category" class="form-control">

        @foreach($categories as $category)

         <option value="{{ $category->id }}"

         @if(isset($post))


         @if( $category->id == $post->category_id)

         selected

         @endif


         @endif

         >
         {{ $category->name }}
         </option>

        @endforeach

        </select>

        </div>


    <div class="form-group">
    <button type="submit" class="btn btn-success">

      {{ isset($post) ? 'Update post' : 'Create post' }}

    </button>

    </div>

    </form>



</div>
</div>
</div>

@endsection


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script >

flatpickr('#publish_at',{

enableTime: true ,
enableSeconds: true

})

$(document).ready(function() {
    $('.tags-selector').select2();
});

</script>

@endsection


@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />


@endsection
