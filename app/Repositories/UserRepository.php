<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Str;

class UserRepository
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function list()
    {
        return $this->user->get();
    }

    public function create($payload)
    {
        array_push($payload, ['id' => Str::uuid()->toString()]);
        $this->user->create($payload);
    }

    public function read($id)
    {
        return $this->user->findOrFail($id);
    }

    public function update($id, $payload)
    {
        $this->user->findOrFail($id)->update($payload);
    }

    public function delete($id)
    {
        $this->user->findOrFail($id)->delete();
    }
}
