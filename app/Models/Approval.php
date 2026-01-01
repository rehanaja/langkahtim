<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $table = 'task_approvals';

    protected $fillable = [
        'task_id',
        'approved_by',
        'status_approval',
        'note'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
