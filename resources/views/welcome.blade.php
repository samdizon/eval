@extends('layouts.cover')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            eVal
        </div>

        <div class="links">
            <a href="{{ url('/') }}">Get started</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
@endsection