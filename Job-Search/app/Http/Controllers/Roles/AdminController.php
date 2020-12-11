<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('roles.admin');
    }

    public function management()
    {
        return "ADMIN MANAGEMENTS";
    }
}
