<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{id}', function ($id) {
    $task = Task::find($id);
    return view('tasks.show', compact('task'));
});

Route::get('/welcome', function () {
    return view('welcome');
});
