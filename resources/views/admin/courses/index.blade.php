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
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Starting Date</th>
                                    <th>Published By</th>
                                    <th>Short Description</th>
                                    <th>LongDescription</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->price }}</td>
                                        <td>{{ \Illuminate\Support\Carbon::parse($course->starting_date)->format('d-m-Y') }}</td>
                                        <td>{{ $course->user_id }}</td>
                                        <td>{{ $course->short_description }}</td>
                                        <td>{!! \Illuminate\Support\Str::words($course->long_description,50,'..') !!}</td>
                                        <td>
                                            <img src="{{asset($course->image)}}" style="height: 80px;" alt="">
                                        </td>
                                        <td>{{$course->status==1?'Active':'Inactive'}}</td>
                                        <td>
                                            @if(auth()->user()->role == 2)
                                            <a href="{{ route('change-course-status',['id'=>$course->id]) }}" class="btn btn-sm" {{ $course->status == 0? 'btn-warning':'btn-success' }}>Status</a>
                                            @endif
                                            <a href="{{route('courses.edit', $course->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{route('courses.destroy', $course->id)}}" method="post">
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

p
