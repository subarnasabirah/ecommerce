@extends('layouts.admin.master')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Users</a></li>
            <li class="breadcrumb-item active">User Details</li>
        </ol>
    </div>

@endsection
@section('content')
    <div class="row">

        <div class="col-md-12">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users Profile</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset($user->image) }}" alt="user image" width="100%">
                        </div>
                        <div class="col-md-6">

                            <table class="table table-bordered">
                                <tr>
                                    <th colspan="2">{{ $user->name }}</th>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{ $user->phone }}</td>
                                </tr>


                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $user->gender }}</td>
                                </tr>


                            </table>




                        </div>

                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

@endsection
