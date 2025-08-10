<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;

class UserRepository implements UserRepositoryInterface
{
    public function find(int $id): Builder|User
    {
        return User::find($id);
    }

    public function findByEmail(string $email): User|null
    {
        return User::where('email', $email)->first();
    }

    public function updateOrCreate(array $data): User
    {
        return User::create($data);
    }
}
