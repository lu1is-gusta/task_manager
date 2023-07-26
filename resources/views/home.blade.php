@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
    <div class="sidebar">
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Create Task</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progress of the Day</h2>
                        <hr class="lineheader">
                        Date
                    </div>
                    <div class="graph-header-subtitle"> Tasks: <b>3/6</b></div>

                    <div class="graph-placeholder"></div>
                    <p class="graph-header-tasks-left"></p>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select name="" id="" class="list-header-select">
                            <option value="1"> All tasks</option>
                        </select>
                    </div>
                </section>
            </main>
        </div>
    </div>
    </div>
@stop