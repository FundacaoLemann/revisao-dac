<?php

namespace App\Http\Controllers\Reviewer;

use App\Http\Controllers\Controller;
use App\Project;
use App\Review;
use Illuminate\Http\Request;

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

    public function store(Project $project, Request $request)
    {
        $project->addReview($request->toArray());
        return redirect(route('reviewer.home'));
    }

}
