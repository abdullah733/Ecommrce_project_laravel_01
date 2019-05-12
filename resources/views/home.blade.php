@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-light" style="text-align: center;">Dashboard</div>

                <div class="card-body badge-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <!-- table -->
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($all_users as $user)
                                <tr>
                                    <th>{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                       <div class="alert alert-success"> You are logged in!</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
