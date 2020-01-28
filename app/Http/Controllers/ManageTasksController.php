<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class ManageTasksController extends Controller
{
    public function complete (Task $task) {
        $task -> markAsCompleted ();
        return redirect () -> action ('TaskController@index');
    }

    public function notComplete (Task $task) {
        $task -> markAsNotCompleted ();
        return redirect () -> action ('TaskController@showCompleted');
    }

}
