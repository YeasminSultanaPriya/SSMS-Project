@extends('admin.master')

@section('title')
    Manage Teacher

@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Manage Teacher</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-responsive" id="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->user->name }}</td>
                                        <td>{{ $teacher->user->email }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->address }}</td>
                                        <td>{{ $teacher->description }}</td>
                                        <td>
                                            <img src="{{asset($teacher->image)}}" style="height: 80px;" alt="">
                                        </td>
                                        <td>{{$teacher->status==1?'Active':'Inactive'}}</td>
                                        <td>
                                            <a href="{{route('teachers.edit', $teacher->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{route('teachers.destroy', $teacher->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-sm btn-danger" value="delete">
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

