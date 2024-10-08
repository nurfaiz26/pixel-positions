<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $job = Job::with(['emplpoyer', 'tags'])->where('title', 'like', '%' . request('q') . '%')->get();

        return view('jobs.results', ['jobs' => $job]);
    }
}
