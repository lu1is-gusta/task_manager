<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Task;

class TaskController extends Controller
{
    public function create(){

        $categories = Category::all();

        return view('tasks.create', ['categories' => $categories]);
    }

    public function store(Request $request){

        $done = $request->exists('done') ? 1 : 0;
        $user = Auth::User();
        
        $task = Task::create([
            'title' => $request->title,
            'date' => $request->date,
            'user_id' => $user->id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'done' => $done
        ]);

        return redirect()->route('home');
    }

    public function edit(Request $request, $id){

        $task = Task::findOrFail($id);
        $categories = Category::all();
        
        return view('tasks.edit', ['task' => $task, 'categories' => $categories]);
    }

    public function update(Request $request, $id){
        
        $done = $request->done != '1' ? false : true;

        $task = Task::findOrFail($id)->update([
            'title' => $request->title,
            'date' => $request->date,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'done' => $done
        ]);
        
        return redirect()->route('home');
    }

    public function delete($id){
        
        $task = Task::findOrFail($id)->delete();
        
        return redirect()->route('home');
    }

    public function taskStatus(Request $request){

        $task = Task::find($request->taskId);
        
        if($task){
            $task->done = $request->taskStatus;
            $task->save();
        }
        
        return ['success' => true];
    }
}
