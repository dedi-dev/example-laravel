<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index() {
        return view('tasks.index', [
            // 'tasks' => DB::table('tasks')->orderBy('id', 'desc')->get(),
            'task' => new Task,
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function create() {
        return redirect('/tasks');
    }

    public function store(TaskRequest $request) {
        // DB::table('tasks')->insert([
        //     'list' => $request->list,
        // ]);
        // Task::insert([
        //     'list' => $request->list,
        // ]);
        // $request->validate([
        //     'list' => 'required',
        // ]);
        Task::create([
            'list' => $request->list,
            'mark' => false,
        ]);

        return back();
    }
    
    public function edit($id) {
        // $task = DB::table('tasks')->where('id', $id)->first();
        $task = Task::find($id);

        return view('tasks/edit', compact('task'));
    }

    public function update(TaskRequest $request, $id) {
        // DB::table('tasks')->where('id', $id)->update(['list' => $request->list]);
        Task::find($id)->update(['list' => $request->list]);
        return redirect('/tasks');
    }

    public function destroy($id) {
        // DB::table('tasks')->where('id', $id)->delete();
        Task::find($id)->delete();
        return back();
    }
}