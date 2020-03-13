@extends('layouts.admin.master')
@section('breadcrumb')
<!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">category</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">category list</a></li>
            <li class="breadcrumb-item active">Edit category</li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="offset-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('category.update',$category->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        @include('admin.category._form')

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
@endsection