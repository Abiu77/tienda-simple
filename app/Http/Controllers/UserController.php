<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::get();
    return view('users.index')->with('users', $users);
  }

  public function create()
  {
    return view('users.create', ['user' => new user]);
  }

  public function store(StoreRequest $request)
  {
    User::create($request->validated());
    return to_route('users.index')->with('status', 'Usuario creado con exito');
  }

  public function edit(User $user)
  {
    return view('users.edit', ['user' => $user]);
  }

  public function update(UpdateRequest $request, User $user)
  {
    $user->update($request->validated());
    return to_route('users.index')->with('status', 'Usuario actualizado con exito');
  }

  public function destroy(User $user)
  {
    $user->delete();
    return to_route('users.index')->with('status', 'Usuario eliminado con exito');
  }
}
