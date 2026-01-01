<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['task_id','file_url','note', 'submit'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
