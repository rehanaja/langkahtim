<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';

    protected $fillable = [
        'organization_id',
        'project_name',
        'description',
        'deadline',
        'status',
    ];

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'project_members')
            ->withPivot('project_role')
            ->withTimestamps();
    }

    /**
     * Organization pemilik project
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
