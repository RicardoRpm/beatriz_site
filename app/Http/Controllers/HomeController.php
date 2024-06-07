<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Statistic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $projects = Project::all();
        $statistic = Statistic::all();

        //dd($statistic);

        return View('site.index', [
            'services' => $services,
            'projects' => $projects,
            'statistic' => $statistic
        ]);
    }
}
