<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Models\User;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        return new PostCollection($user->posts);
    }
}
