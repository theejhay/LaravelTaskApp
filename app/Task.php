<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'priority',
        'completed',
        'due_date',];

    public function markAsCompleted () {
        $this -> completed = "Completed";
        $this -> update ();
    }

    public function markAsNotCompleted () {
        $this -> completed = "Not Completed";
        $this -> update ();
    }
}
