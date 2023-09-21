@extends('layouts.layout')
@section('title', 'Home Page')
@section('content')
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="{{ url('/task/create') }}" class="btn btn-primary">Create Task</a>
                
                <a href="{{ url('/logout') }}" class="btn btn-primary">Logout</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progress of the Day</h2>
                        <div class="graph-header-line"></div>
                        <div class="graph-geader-date">
                            <a href="{{ route('home', ['date' => $previousDate]) }}" >
                                <img src="/assets/images/icon-prev.png" alt="">
                            </a> 
                                {{ $formatDate }}
                            <a href="{{ route('home', ['date' => $nextDate]) }}">
                                <img src="/assets/images/icon-next.png" alt="">
                            </a> 
                        </div>
                    </div>
                    <div class="graph-header-subtitle"> Tasks: 
                        <b>{{ $taskCount - $taskOpenCount }}/{{ $taskCount }}</b>
                    </div>

                    <div class="graph-placeholder">
                        
                    </div>

                    <div class="tasks-left-footer">
                        <img src="/assets/images/icon-info.png" alt="">
                        {{ $taskOpenCount }} Tasks left to be completed
                    </div>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select name="" id="" class="list-header-select">
                            <option value="1"> All tasks</option>
                        </select>
                    </div>
                    @foreach ($tasksHome as $taskHome)
                        <div class="task-list">
                            <div class="task">
                                <div class="title">
                                    <input type="checkbox" onchange="taskStatus(this)" data-id="{{ $taskHome->id }}"
                                        @if($taskHome and $taskHome->done)
                                            checked
                                        @endif
                                    />
                                    <h3 class="task-title">{{ $taskHome->title ?? ''}}</h3>
                                </div>
                                <div class="priority">
                                    <div class="sphere"></div>
                                    <h6>{{ $taskHome->category->title ?? ''}}</h6>
                                </div>
                                <div class="actions">
                                    <a href="{{ url('/task/edit', ['id' => $taskHome->id]) }}">
                                        <img src="/assets/images/icon-edit.png" alt="">
                                    </a> 
                                    <a href="{{ url('/task/delete', ['id' => $taskHome->id]) }}">
                                        <img src="/assets/images/icon-delete.png" alt="">
                                    </a> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </main>
        </div>
    </div>

<script>
    async function taskStatus(element){
        let taskStatus = element.checked
        let taskId = element.dataset.id
        let url = "{{ url('/task/taskStatus') }}"
        const request = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-type': 'application/json',
                'Accept': 'application/json'    
            },
            body: JSON.stringify({taskStatus, taskId, _token: '{{ csrf_token() }}'})
        })

        result = await request.json()
    }
</script>
@endsection

