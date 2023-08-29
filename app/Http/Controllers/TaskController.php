<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request){

        return view('tasks.create');
    }

    public function edit(Request $request, $id){

        return view('tasks.edit');
    }
}
