<?php

namespace App\Policies;

use App\Solicito;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SolicitoPolicy
{
    use HandlesAuthorization;

    public function edit( User $user, Solicito $solicito)
    {
        return $user->id == $solicito->user->id;

    }

    /**
     * Determine whether the user can view any solicitos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the solicito.
     *
     * @param  \App\User  $user
     * @param  \App\Solicito  $solicito
     * @return mixed
     */
    public function view(User $user, Solicito $solicito)
    {
        //
    }

    /**
     * Determine whether the user can create solicitos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the solicito.
     *
     * @param  \App\User  $user
     * @param  \App\Solicito  $solicito
     * @return mixed
     */
    public function update(User $user, Solicito $solicito)
    {
        //
    }

    /**
     * Determine whether the user can delete the solicito.
     *
     * @param  \App\User  $user
     * @param  \App\Solicito  $solicito
     * @return mixed
     */
    public function delete(User $user, Solicito $solicito)
    {
        //
    }

    /**
     * Determine whether the user can restore the solicito.
     *
     * @param  \App\User  $user
     * @param  \App\Solicito  $solicito
     * @return mixed
     */
    public function restore(User $user, Solicito $solicito)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the solicito.
     *
     * @param  \App\User  $user
     * @param  \App\Solicito  $solicito
     * @return mixed
     */
    public function forceDelete(User $user, Solicito $solicito)
    {
        //
    }
}
