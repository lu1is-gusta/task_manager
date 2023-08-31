@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav></nav>
            <main>
                <section id="task-section">
                    <h1>Sign In</h1>

                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ url('/login/store') }}">
                        @csrf

                        <div class="div-form">
                            <label for="email">Your E-mail</label>
                            <input type="text" name="email" id="email" placeholder="Type your e-mail" required/>
                        </div>

                        <div class="div-form">
                            <label for="password">Your Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter a password" required/>
                        </div>

                        <div class="div-form">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        <a href="{{ url('/register') }}">Don't have registration? register</a>
                    </form>
                </section>
            </main>
        </div>
    </div>
@endsection