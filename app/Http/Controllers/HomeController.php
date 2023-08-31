<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class HomeController extends Controller
{
    public function index(){

        $tasksHome = Task::all();
        $authUser = Auth::user();

        return view('home', ['tasksHome' => $tasksHome, 'authUser' => $authUser]);
    }
}
