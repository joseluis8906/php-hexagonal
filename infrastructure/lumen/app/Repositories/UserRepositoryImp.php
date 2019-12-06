<?php

namespace App\Repositories;

use Domain\User\User;
use Domain\User\UserRepository;

class UserRepositoryImpl implements UserRepository
{
  public function findAll(): array
  {
    $user = new User();
    $user->id(1);
    return array($user);
  }
}
