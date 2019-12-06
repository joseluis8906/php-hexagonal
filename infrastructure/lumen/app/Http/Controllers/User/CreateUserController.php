<?php

namespace App\Http\Controllers;

use Application\Contracts\UserService;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
  protected $userService;

  public function __construct(UserService $userService)
  {
    $this->userService = $userService;
  }

  public function __invoke(Request $request)
  {
    $users = $this->userService->findAll();
    return response()->json(['result' => $users]);
  }
}