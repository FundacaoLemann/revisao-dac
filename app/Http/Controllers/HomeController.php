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

        $quantityProjectsRevised = $projects->countBy(function ($item) {
            return $item->status == 'revisado';
        });

        $quantityProjectsRevised = (isset($quantityProjectsRevised[1])) ? $quantityProjectsRevised[1] : 0;

        $projectsNotAssigned = Project::doesntHave('reviewers')->count();

        $estados = config('constants.estados');

        return view('admin.dashboard', compact('projects', 'quantityProjectsRevised', 'projectsNotAssigned', 'estados'));
    }

    public function export()
    {
        $fileName = 'ProjectsDAC-'.date('Ymd-His').'.xls';

        return Excel::download(new ProjectsExport, $fileName);
    }

}
