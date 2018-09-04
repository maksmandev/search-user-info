@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Users Table</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Location</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->location->ter_address}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection