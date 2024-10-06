<?php

namespace App\Interfaces;

interface UserInterface {
    public function findByEmail(string $email);
    public function createUser(array $data);
}