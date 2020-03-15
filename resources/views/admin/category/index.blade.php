@extends('layouts.admin.master')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
            <li class="breadcrumb-item active">Category list</li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category list</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Sl No</th>
                            <th>Name</th>
                            <th>Is Featured</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$serial++}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->is_featured==1?'Yes':'No'}}</td>
                                    <td>{{$category->status}}</td>
                                    <td>
                                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                        <form action="{{route('category.destroy',$category->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                {{$categories->render()}}
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->

    </div>
@endsection