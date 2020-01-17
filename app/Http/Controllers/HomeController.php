<?php

namespace App\Http\Controllers;

use App\Project;
use App\Review;
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

        $quantityReviews = Review::distinct('project_id')->count();

        $projectsNotAssigned = Project::doesntHave('reviewers')->count();

        return view('admin.dashboard', compact('projects', 'quantityReviews', 'projectsNotAssigned'));
    }

    public function export()
    {
        $fileName = 'ProjectsDAC-'.date('Ymd-His').'.xls';

        return Excel::download(new ProjectsExport, $fileName);
    }

}
