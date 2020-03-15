@extends('layouts.admin.master')
@section('breadcrumb')

    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">User List</li>
        </ol>
    </div>

@endsection
@section('content')

    <div class="col-md-12">


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Image</th>
                        <th>Gender</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td>{{$serial++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->image}}</td>
                            <td>{{$user->gender}}</td>
                            <td>
                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{route('user.show',$user->id)}}" class="btn btn-primary btn-sm">Show</a>
                                <form action="{{route('user.destroy',$user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You confirm?')">Delete</button>
                                </form>
                            </td>

                        </tr>




                    @endforeach
                    </tbody>
                </table>
                {{$users->render() }}




            </div>
            <!-- /.card-body -->
        </div>


@endsection

