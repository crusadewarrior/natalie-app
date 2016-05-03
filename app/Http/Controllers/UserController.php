<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\RoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * The UserRepository instance.
     *
     * @var App\Repositories\UserRepository
     */
    protected $user_gestion;

    /**
     * The RoleRepository instance.
     *
     * @var App\Repositories\RoleRepository
     */
    protected $role_gestion;

    /**
     * Create a new UserController instance.
     *
     * @param  App\Repositories\UserRepository $user_gestion
     * @param  App\Repositories\RoleRepository $role_gestion
     * @return void
     */

    public function __construct(
        UserRepository $user_gestion,
        RoleRepository $role_gestion)
    {
        $this->user_gestion = $user_gestion;
        $this->role_gestion = $role_gestion;

        $this->middleware('admin');
        $this->middleware('ajax', ['only' => 'updateSeen']);
    }
}
