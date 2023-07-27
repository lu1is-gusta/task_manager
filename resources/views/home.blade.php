@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Create Task</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progress of the Day</h2>
                        <div class="graph-header-line"></div>
                        <div class="graph-geader-date">
                            <img src="/assets/images/icon-prev.png" alt="">
                                March, 16
                            <img src="/assets/images/icon-next.png" alt="">
                        </div>
                    </div>
                    <div class="graph-header-subtitle"> Tasks: <b>3/6</b></div>

                    <div class="graph-placeholder">
                        
                    </div>

                    <div class="tasks-left-footer">
                        <img src="/assets/images/icon-info.png" alt="">
                        sjkdhkasjdhkjshdkjdhaksjdhasdkjasdhjkas
                    </div>
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
                                <a href="#">
                                    <img src="/assets/images/icon-edit.png" alt="">
                                </a> 
                                <a href="#">
                                    <img src="/assets/images/icon-delete.png" alt="">
                                </a> 
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection