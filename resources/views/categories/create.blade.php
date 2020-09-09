@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-end mb-2" >


</div>
<div class="card card-primary">

<div class="card card-default">
<div class="card-header">

  {{ isset($category) ? 'Edit category' : 'Create category' }}

</div>

<div class="card-body">

  @include('partials.error')

<form action="{{ isset($category) ? route('categories.update',$category->id) : route('categories.store') }}" method="post">

@csrf

@if(isset($category))

@method('put')

@endif


<div class="form-group">
<label for="name">Name</label>

<input type="text" id="name" class="form-control" name="name" value="{{ isset($category) ? $category->name : '' }}" >

</div>
<div class="form-group">
<button class="btn btn-success">{{ isset($category) ? 'Update category' : 'Add category' }}

</button>
</div>

</form>

</div>

</div>
</div>


@endsection
