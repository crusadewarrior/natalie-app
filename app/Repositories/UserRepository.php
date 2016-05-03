<?php

namespace App\Repositories;


use App\Models\User, App\Models\Role;

class UserRepository extends BaseRepository {

    /**
     * The Role instance.
     *
     * @var App\Models\Role
     */
    protected $role;

    /**
     * Create a new UserRepository instance.
     *
     * @param  App\Models\User $user
     * @param  App\Models\Role $role
     * @return void
     */

    public function __construct(
        User $user,
        Role $role
    ) {
        $this->model = $user;
        $this->model = $role;
    }

    /**
     * Save the User.
     *
     * @param  App\Models\User $user
     * @param  Array $inputs
     * @return void
     */
    private function save($user, $inputs) {
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];

        if (isset($inputs['role'])) {
            $user->role_id = $inputs['role'];
        } else {

            $role_user = $this->role->where('slug', 'user')->first();
            $user->role_id = $role_user->id;
        }

        $user->save();
    }

}