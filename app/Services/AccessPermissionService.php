<?php
namespace App\Services;

use App\Repositories\AccessPermissionRepository;

class AccessPermissionService
{
    private $repository;

    public function __construct(AccessPermissionRepository $accessPermissionRepository)
    {
        $this->repository = $accessPermissionRepository;
    }

    public function list()
    {
        return $this->repository->list();
    }

    public function create($payload)
    {
        $this->repository->create($payload);
    }

    public function read($id)
    {
        return $this->repository->read($id);
    }

    public function update($id, $payload)
    {
        return $this->repository->update($id, $payload);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
