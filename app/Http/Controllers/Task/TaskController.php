<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TaskController extends Controller
{

    /**
     * display list task
     */
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::paginate(Config::get('page.per')),
        ]);
    }

     /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function destroy(Request $request)
    {
        if(isset($request->id)){
            Task::destroy($request->id);
        }
        return redirect('/tasks');
    }
}
