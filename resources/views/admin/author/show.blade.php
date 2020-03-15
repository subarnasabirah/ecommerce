@extends('layouts.admin.master')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('author.index')}}">Author</a></li>
            <li class="breadcrumb-item active">{{$title}}</li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$author->name}}'s Profile</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset($author->photo)}}" width="100%" height="350px" style="border-radius:50%;" >
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="2">{{$author->name}}</th>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{$author->description}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.col -->

    </div>
@endsection
