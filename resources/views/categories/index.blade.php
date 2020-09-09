@extends('layouts.master')

@section('content')
<div class="row mt-5">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Categories Table</h3>
                        <div class="card-tools">
                            <a href="{{ route('categories.create') }}" class="btn btn-success" >
                                <i class="fas fa-plus fa-fw"></i>
                                New Category

                            </a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    @if($categories->count() > 0)

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Posts count</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($categories as $category)

                                <tr

                                >
                                    <td> {{ $category->id }}</td>
                                    <td> {{ $category->name }}</td>
                                    <td>{{ $category->posts->count() }}</td>
                                    <td>
                                        <a
                                          href="{{ route('categories.edit', $category->id) }}"

                                        >
                                            <i class="fa fa-edit blue"></i>
                                        </a>
                                        /
                                        <a
                                            onclick="handleDelete({{ $category->id }})"

                                        >
                                            <i class="fa fa-trash red"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

@else

<h3 class="text-center">No categories foe Z moment</h3>
@endif


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

  <form action="" method="POST" id="deleteCategoryForm">

  @csrf

  @method('DELETE')



  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center text-bold">

        Are you sure want to delete this category ?
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
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>

@endsection


@section('scripts')

<script>

function handleDelete(id){


    var form = document.getElementById('deleteCategoryForm')


    form.action = '/categories/' + id


    $('#deleteModal').modal('show')
}

</script>

@endsection
