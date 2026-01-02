<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';

    protected $fillable = [
        'name',
        'owner_id',
    ];

    public function owner()
    {
        return $this->hasOne(OrganizationUser::class)->where('role', 'owner');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'organization_users')->using('OrganizationUser')->withPivot('role')->withTimestamps();
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
