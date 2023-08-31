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

        // dd($request->all());
        $task = Task::create([$request->all()]);

        return redirect(route('home'));
    }

    public function edit(Request $request, $id){

        $task = Task::findOrFail($id);
        $categories = Category::all();
        
        return view('tasks.edit', ['task' => $task, 'categories' => $categories]);
    }

    public function update(Request $request, $id){
        
        $task = Task::findOrFail($id)->update([
            'title' => $request->title,
            'date' => $request->date,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);
        
        return redirect(route('home'));
    }

    public function delete($id){
        
        $task = Task::findOrFail($id)->delete();
        
        return redirect(route('home'));
    }
}
