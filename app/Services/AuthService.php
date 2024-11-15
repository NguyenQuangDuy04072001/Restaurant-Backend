<?php

namespace App\Services;

use App\Interfaces\UserInterface;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Token;

class AuthService {
    protected $userRepository;

    public function __construct(UserInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function registerUser(array $data) {
        $email = $data['email'];
        $password = Hash::make($data['password']);
        $role = $data['role'];

        if ($this->userRepository->findByEmail($email)) {
            return ['status' => false, 'message' => 'Email đã tồn tại'];
        }

        $dataUser = [
            'email' => $email,
            'password' => $password,
            'role' => $role,
        ];

        $user = $this->userRepository->createUser($dataUser);

        $token = $user->createToken('Personal Access Token')->accessToken;

        return ['status' => true, 'user' => $user, 'token' => $token];
    }
}