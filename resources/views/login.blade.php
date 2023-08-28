@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="{{ url('/register') }}" class="btn btn-primary">Register</a>
            </nav>
            
        </div>
    </div>
@endsection