<?php

namespace App\Repositories;

use App\Interfaces\AuthenticationRepository;


class AuthenticationRepositoryImpl implements AuthenticationRepository
{
        public function register(array $info)
        {
            return User::create($info);
        }
}
