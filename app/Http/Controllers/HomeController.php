<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Exports\ProjectsExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::
            withCount('reviewers')
            ->orderBy('projeto_nome')
            ->get();

        return view('admin.dashboard', compact('projects'));
    }

    public function export()
    {

        return Excel::download(new ProjectsExport, 'projects.xls');

    }

}
