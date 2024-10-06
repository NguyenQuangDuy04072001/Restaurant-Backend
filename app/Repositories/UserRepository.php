<?php
namespace App\Repositories;
use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface {
    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function findByEmail(string $email) {
        return $this->user->where('email', $email)->first();
    }

    public function createUser(array $data) {
        return $this->user->create($data);
    }
}
