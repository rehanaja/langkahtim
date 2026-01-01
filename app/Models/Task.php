<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'project_id',
        'assigned_to',
        'title',
        'description',
        'status',
        'deadline',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function approval()
    {
        return $this->hasOne(Approval::class);
    }

    public function subTask()
    {
        return $this->hasMany(SubTask::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
