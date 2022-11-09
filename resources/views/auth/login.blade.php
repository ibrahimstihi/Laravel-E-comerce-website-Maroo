@extends('layouts.layout')
@section('content')
<link href="{{ asset('css/admin/admin-login.css') }}" rel="stylesheet">
<div class="container" style="height: 50vh">
    <form action="{{ route('login') }}" method="POST">
        <h3>User Login</h3>
        @csrf

        <div><label for="email">email</label></div>
        <input type="text" name="email" id="email">

        <div><label for="email">Password</label></div>
        <input type="password" name="password" id="password">
        <button type="submit" class="btn-primary">Login</button>
        <a href="{{route('register')}}">sign Up</a>
    </form>
</div> 

@endsection