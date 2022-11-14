@extends('admin.master')

@section('title')
    Add Courses

@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Courses</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('courses.update',$course->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Course Title</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ $course->title }}" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Course Price</label>
                                    <div class="col-md-8">
                                        <input type="text" value="{{ $course->price }}" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Starting Date</label>
                                    <div class="col-md-8">
                                        <input type="date" name="starting_date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" id="" cols="30" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row col-12">
                                    <label for="" class="">Long Description</label>
                                    <div class="">
                                        <textarea name="long_description" id="" cols="30" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Add Courses">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


