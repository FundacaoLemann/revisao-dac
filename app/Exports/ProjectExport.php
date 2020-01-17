<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProjectExport implements FromView
{
    protected $project;

    function __construct($project)
    {
        $this->project = $project;
    }

    public function view(): View
    {
        return view('exports.project', ['project' => $this->project]);
    }
}
