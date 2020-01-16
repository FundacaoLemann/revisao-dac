<?php

namespace App\Http\Controllers\Reviewer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:reviewer');
    }

    public function index(){

        $projects = auth('reviewer')->user()->projects;

        return view('reviewer.home', compact('projects'));
    }
}
