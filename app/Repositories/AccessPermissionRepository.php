<?php
namespace App\Repositories;

use App\Models\AccessPermission;

class AccessPermissionRepository
{
    private $access_permission;

    public function __construct(AccessPermission $accessPermission)
    {
        $this->access_permission = $accessPermission;
    }

    public function list()
    {
        return $this->access_permission->get();
    }

    public function create($payload)
    {
        array_push($payload, ['id' => Str::uuid()->toString()]);
        $this->access_permission->create($payload);
    }

    public function read($id)
    {
        return $this->access_permission->findOrFail($id);
    }

    public function update($id, $payload)
    {
        $this->access_permission->findOrFail($id)->update($payload);
    }

    public function delete($id)
    {
        $this->access_permission->findOrFail($id)->delete();
    }
}
