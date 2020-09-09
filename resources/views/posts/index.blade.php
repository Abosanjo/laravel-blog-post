@extends('layouts.master')

@section('content')
<div class="row mt-5">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Posts Table</h3>
                        <div class="card-tools">
                            <a href="{{ route('posts.create') }}" class="btn btn-success" >
                                <i class="fas fa-plus fa-fw"></i>
                                New Post

                            </a>
                        </div>
                    </div>
                    @if($posts->count() > 0)

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image </th>
                                    <th>Title </th>
                                    <th>Category </th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($posts as $post)

                                <tr

                                >
                                    <td> {{$post->id}}   </td>
                                    <td>  <img src="/img/{{ $post->image }}"  width="60px" height="60px" alt=""> </td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                    <a href="{{ route('categories.edit', $post->category->id  ?? '') }}">


                                     {{ $post->category->name  ?? ''  }}


                                     </a> </td>
                                    <td>
                                        <a
                                         href="{{ route('posts.edit',$post->id) }}"
                                        >
                                            <i class="fa fa-edit blue"></i>
                                        </a>
                                        /
                                        <a
                                        onclick="handleDelete({{ $post->id }})"

                                        >
                                            <i class="fa fa-trash red"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>


                     @else
                     <h3 class="text-center">No Posts Yet</h3>
                     @endif



                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">

                          <form action="" method="POST" id="deleteCategoryForm">

                          @csrf

                          @method('DELETE')



                          <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete Post </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p class="text-center text-bold">

                                Are you sure want to delete this post  ?
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                              </div>
                            </div>

                          </form>



                          </div>
                        </div>


                      </div>






                  </div>
                </div>
              </div>


@endsection


@section('scripts')

<script>

function handleDelete(id){


    var form = document.getElementById('deleteCategoryForm')


    form.action = '/posts/' + id


    $('#deleteModal').modal('show')
}

</script>

@endsection
