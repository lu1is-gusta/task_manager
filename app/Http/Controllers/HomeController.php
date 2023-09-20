<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class HomeController extends Controller
{
    public function index(){

        $tasksHome = Task::whereDate('date', date('Y-m-d'))->get();
        $taskCount = $tasksHome->count();
        $taskOpenCount = $tasksHome->where('done', false)->count();
        $authUser = Auth::user();

        return view('home', ['tasksHome' => $tasksHome, 'authUser' => $authUser, 'taskCount' => $taskCount, 'taskOpenCount' => $taskOpenCount]);
    }
}
