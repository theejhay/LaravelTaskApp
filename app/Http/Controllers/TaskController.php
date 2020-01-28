<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TaskController extends Controller
{
    const RULES = [
        'title' => 'required|min:1|max:256',
    ];
    const MESSAGES = [
        'title.required' => 'The title is required.',
    ];

    /**
     * Method to filter and display all active tasks which have not been completed.
     */
    public function index(Request $request){
        $tasks=$request->user()->tasks()->whereIn('completed', ["Not Completed"])->paginate(10);
        return view('tasks', compact('tasks'));
    }

    public function create(){
        return view ('tasks.create');
    }

    public function store(Request $request){
        $request -> validate (self::RULES, self::MESSAGES);
        $attributes  = request (['user_id', 'title', 'due_date', 'priority']);
        Task::create ($attributes);
        return redirect () -> action ('TaskController@index');
    }

    public function show(Task $task){
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task){
        return view ('tasks.edit', compact ('task'));
    }

    public function update(Task $task, Request $request){
        $request -> validate (self::RULES, self::MESSAGES);
        $task->update(request(['title', 'priority', 'due_date']));
        return redirect()->action('TaskController@index');
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->action('TaskController@index');
    }

    /**
     * Method to filter and display all tasks that have been completed.
     */
    public function showCompleted(Request $request){
        $tasks=$request->user()->tasks()->whereIn('completed', ["Completed"])->paginate(10);
        return view('tasks.completed', compact('tasks'));
    }

    /**
     * Method to filter and display all tasks where date is smaller than today.
     */
    public function showOverdue(Request $request){
        $tasks=$request->user()->tasks()->where('due_date', '<', Carbon::now())->where('completed', ["Not Completed"])->paginate(10);
        return view('tasks.overdue', compact('tasks'));
    }

    /**
     * Method to filter and search all task titles matching the input.
     */
    public function search(Request $request){
        $search = $request->get('search');
        $tasks = $request->user()->tasks()->where('title', 'like' ,['%'.$search.'%'])->where('completed', ["Not Completed"])->paginate(10);
        return view('tasks', compact('tasks'));
    }

}
