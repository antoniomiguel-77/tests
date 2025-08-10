<?php

namespace App\DTOs;

class UserDTO
{
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }


    public static function  fromModel($user): UserDTO
    {
        return new self(
            $user->id,
            $user->name,
            $user->email
        );
    }
}
