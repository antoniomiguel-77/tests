<?php

namespace App\Services;

use App\DTOs\UserDTO;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $users;

    public function __construct(UserRepositoryInterface $users)
    {
        $this->users = $users;
    }

    public function registerUser(array $data): UserDTO
    {
        // Regra de negócio: email único
        if ($this->users->findByEmail($data['email'])) {
            throw new \Exception('Email já cadastrado');
        }

        // Regra de negócio: criptografar senha
        $data['password'] = Hash::make($data['password']);

        // Salva o usuário
        $user = $this->users->updateOrCreate($data);

        // Retorna como DTO
        return UserDTO::fromModel($user);
    }

    public function getUserById(int $id): ?UserDTO
    {
        $user = $this->users->find($id);

        return $user ? UserDTO::fromModel($user) : null;
    }
}
