<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Task;
class TaskController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $task = Task::create([ 'title' => $request->input('title') ]);
        return response()->json($task, 201);
    }

    public function update($id, Request $request): JsonResponse
    {
        $task = Task::findOrFail($id);
        $task->update([ 'is_completed' => $request->input('is_completed', true) ]);
        return response()->json($task);
    }

    public function getPending(): JsonResponse
    {
        return response()->json(Task::where('is_completed', false)->get());
    }
}
