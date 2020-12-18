<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::get();
        return view('tasks.index', compact('tasks'));
    }
}
