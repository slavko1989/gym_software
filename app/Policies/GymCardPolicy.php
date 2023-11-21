<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Member;
use Illuminate\Auth\Access\HandlesAuthorization;


class GymCardPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

        
    }

    public function view(User $user, Member $gymCard)
{
    return $user->id === $gymCard->user_id;
}

}
