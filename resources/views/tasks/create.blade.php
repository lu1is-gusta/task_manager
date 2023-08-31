@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
            </nav>
            <main>
                <section id="task-section">
                    <h1>Create Task</h1>
                    <form method="POST" action="{{ url('/task/store') }}">
                        @csrf

                        <div class="div-form">
                            <label for="title">Title of Task</label>
                            <input type="checkbox" name="done" id="done" value="checked" />
                        </div>

                        <div class="div-form">
                            <label for="title">Title of Task</label>
                            <input type="text" name="title" id="title" placeholder="Enter task title" required/>
                        </div>

                        <div class="div-form">
                            <label for="date">Date</label>
                            <input type="datetime-local" name="date" id="date" placeholder="Enter the date" required/>
                        </div>

                        <div class="div-form">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" required>
                                <option selected disable value="">Select the category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="div-form">
                            <label for="description">Task description</label>
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter a description"></textarea>
                        </div>

                        <div class="div-form">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </section>
            </main>
        </div>
    </div>
@endsection