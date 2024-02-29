<?php
namespace App\Services;

use App\Models\AccessPermission;
use App\Models\User;
use App\Repositories\AccessPermissionRepository;
use App\Repositories\UserRepository;

class AccessManager
{
    private $accessPermissionRepository;

    private $userRepository;

    public function __construct(AccessPermissionRepository $accessPermissionRepository, UserRepository $userRepository)
    {
        $this->accessPermissionRepository = $accessPermissionRepository;
        $this->userRepository = $userRepository;
    }

    public function addToPermission($id, $permission_name)
    {
        $user = User::findOrFail($id);
        $accessor = AccessPermission::firstWhere(['name' => $permission_name]);
        if ($user && $accessor) {
            $user->accessPermissions()->attach($accessor);
        }
    }

    public function removeFromPermission($id, $permission_name)
    {
        $user = User::findOrFail($id);
        $accessor = AccessPermission::firstWhere(['name' => $permission_name]);
        if ($user && $accessor) {
            $user->accessPermissions()->detach($accessor);
        }
    }
}
