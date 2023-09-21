<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(Request $request){

        $filteredDate = $request->date ? Carbon::createFromDate($request->date) : Carbon::now();
        $formatDate = $filteredDate->format('Y \of F d');
        $previousDate = $filteredDate->subDays(1)->format('Y-m-d');
        $nextDate = $filteredDate->addDays(2)->format('Y-m-d');

        $tasksHome = Task::whereDate('date', $filteredDate)->get();
        $taskCount = $tasksHome->count();
        $taskOpenCount = $tasksHome->where('done', false)->count();
        $authUser = Auth::user();

        return view('home', 
            [
                'tasksHome' => $tasksHome, 
                'authUser' => $authUser, 
                'taskCount' => $taskCount, 
                'taskOpenCount' => $taskOpenCount,
                'formatDate' => $formatDate,
                'previousDate' => $previousDate,
                'nextDate' => $nextDate,
            ]);
    }
}
