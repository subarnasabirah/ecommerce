@extends('layouts.admin.master')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('free_book.index')}}">Free books</a></li>
            <li class="breadcrumb-item active">{{$title}}</li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6 offset-3">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add new free book</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('free_book.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @include('admin.free_book._form')
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->



        </div>
        <!-- /.card -->

    </div>
    <!--/.col (left) -->
@endsection