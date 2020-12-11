<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Company;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::all()->random(5);
        return view('welcome', ['companies' => $companies]);
    }
}
