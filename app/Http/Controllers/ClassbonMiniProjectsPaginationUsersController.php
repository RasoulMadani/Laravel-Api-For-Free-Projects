<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClassbonMiniProjectsPaginationUsersCollection;
use App\Http\Resources\ClassbonMiniProjectsPaginationUsersResource;
use App\Models\ClassbonMiniProjectsPaginationUsers;
use Illuminate\Http\Request;

class ClassbonMiniProjectsPaginationUsersController extends Controller
{
    public function apiUsers()
    {
        $users = ClassbonMiniProjectsPaginationUsers::get();
        // $users = url('storage/images/avatar-1.jpg');
        // return $users;
        return $users;
    }
}
