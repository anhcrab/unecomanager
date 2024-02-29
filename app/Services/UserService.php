<?php
namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
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
