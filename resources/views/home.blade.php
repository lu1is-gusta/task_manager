@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="sidebar">

        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Create Task</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progress of the Day</h2>
                        <hr class="lineheader"/>
                        Date
                    </div>
                    <div class="graph-header-subtitle"> Tasks: <b>3/6</b></div>

                    <div class="graph-placeholder">

                    </div>
                    <p class="graph-header-tasks-left">sjkdhkasjdhkjshdkjdhaksjdhasdkjasdhjkas</p>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select name="" id="" class="list-header-select">
                            <option value="1"> All tasks</option>
                        </select>
                    </div>
                    <div class="task-list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id=""/>
                                <h3 class="task-title">Title of Task</h3>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <h6>Title of Task</h6>
                            </div>
                            <div class="actions">
                                Edit - Delete
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection