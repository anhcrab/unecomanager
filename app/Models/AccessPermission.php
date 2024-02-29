<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AccessPermission extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'name',
    ];
    public $timestamp = false;
    public function users() : BelongsToMany
    {
        return $this->belongsToMany(AccessPermission::class, 'access_permission_user', 'user_id', 'access_permission_id');
    }
}
