<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    public function create(User $user)
    {
        return $user->email === 'mehdibrhl4@gmail.co';
    }

    public function edit(User $user, User $userToEdit)
    {
        return (bool) mt_rand(0, 1);
    }
}
