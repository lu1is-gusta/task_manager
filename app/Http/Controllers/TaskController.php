<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(){

        $categories = Category::all();

        return view('tasks.create', ['categories' => $categories]);
    }

    public function store(Request $request){

        dd($request->all());
        $task = Task::create([$request->all()]);

        return redirect(route('home'));
    }

    public function edit(Request $request, $id){

        return view('tasks.edit');
    }
}
