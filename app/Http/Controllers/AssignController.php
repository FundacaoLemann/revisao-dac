<?php

namespace App\Http\Controllers;

use App\Project;
use App\Reviewer;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Assign a project
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::
            select(['id', 'projeto_nome', 'departamento_estado'])
            ->withCount('reviewers')
            ->orderBy('projeto_nome')
            ->get();

        $reviewers = Reviewer::
            withCount('projects')
            ->orderBy('name')
            ->get();

        $estados = config('constants.estados');

        return view('admin.assign', compact('projects', 'reviewers', 'estados'));
    }

    public function store(Request $request)
    {

        if($request->projects && $request->reviewers) {

            foreach($request->projects as $projectId)
                Project::find($projectId)->reviewers()->sync($request->reviewers);

        }

        return redirect()->route('assign')->with('success', 'Projetos atribuidos com sucesso.');

    }

}
