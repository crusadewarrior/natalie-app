<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\UserRepository;

class AdminController extends Controller {

    /**
     * The UserRepository instance.
     *
     * @var App\Repositories\UserRepository
     */
    protected $user_gestion;

    /**
     * Create a new AdminController instance.
     *
     * @param  App\Repositories\UserRepository $user_gestion
     * @return void
     */

    public function __construct(UserRepository $user_gestion) {
        $this->user_gestion = $user_gestion;
    }
}
