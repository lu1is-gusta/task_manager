@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="{{ url('/login') }}" class="btn btn-primary">Back</a>
            </nav>
            <main>
                <section id="task-section">
                    <h1>Make Your Registration</h1>

                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <form method="POST" action="{{ url('/register/store') }}">
                        @csrf

                        <div class="div-form">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" placeholder="Type your name" required/>
                        </div>

                        <div class="div-form">
                            <label for="email">Your E-mail</label>
                            <input type="text" name="email" id="email" placeholder="Type your e-mail" required/>
                        </div>

                        <div class="div-form">
                            <label for="password">Your Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter a password" required/>
                        </div>

                        <div class="div-form">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required/>
                        </div>


                        <div class="div-form">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </section>
            </main>
        </div>
    </div>
@endsection