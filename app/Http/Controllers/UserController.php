<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


    public function create()
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        try {
            $userDTO = $this->service->registerUser($request->all());
            return response()->json($userDTO, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    public function show($id)
    {
        $userDTO = $this->service->getUserById($id);

        if (!$userDTO) {
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }

        return response()->json($userDTO);
    }
}
