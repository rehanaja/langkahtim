<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $table = 'subtasks';

    protected $fillable = ['task_id','title', 'is_completed'];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
