<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use App\Project;
use App\Review;
use Illuminate\Http\Request;
use App\Exports\ProjectExport;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:reviewer');
    }

    public function index(Project $project)
    {
        if(!auth()->user()->projects->contains('id', $project->id)) {
            abort(403);
        }

        $review = $project->reviews()
            ->where('reviewer_id', auth('reviewer')->id())
            ->first();

        return view('reviewer.project', compact('project', 'review'));
    }

    public function export(Project $project)
    {
        if(!auth()->user()->projects->contains('id', $project->id)) {
            abort(403);
        }

        return view('exports.project', compact('project'));

        //return Excel::download(new ProjectExport($project), 'invoices.pdf');

    }

    public function store(Project $project, Request $request)
    {
        $review = Review::find($request->id);

        $data = $request->except(['_token']);

        if($review) {
            $review->update($data);
        } else {
            $project->addReview($data);
        }

        return redirect(route('reviewer.home'));
    }

}
