<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function find(int $id);
    public function findByEmail(string $email);
    public function updateOrCreate(array $data);
}
