@extends('layouts.master')

@section('content')
<div class="row mt-5">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Users  Table</h3>
                        <div class="card-tools">

                        </div>
                    </div>


                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image </th>
                                    <th>Name  </th>
                                    <th>Email </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $user)

                                <tr

                                >
                                    <td> {{$user->id}}   </td>
                                    <td> <img width="40px" height="40px" style="border-radios: 50%" src="{{ Gravatar::src($user->email) }}" alt="">  </td>
                                    <td>{{ $user->name  }}</td>
                                    <td>
                                      {{ $user->email  }}

                                    </td>
                                    <td>
                                      @if(!$user->isAdmin())

                                      <form action="{{ route('users.make-admin',$user->id)}}"  method="POST">

                                        @csrf

                                       <button type="submit" class="btn-success btn-sm">Make Admin</button>


                                      </form>

                                      @endif
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                      </div>






                  </div>
                </div>
              </div>


@endsection
