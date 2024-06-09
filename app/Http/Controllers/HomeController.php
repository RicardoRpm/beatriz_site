<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

        return View('site.index', [
            'services' => $services,
            'projects' => $projects,
            'statistic' => $statistic
        ]);
    }

    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'subject' => $request->subject,
            'description' => $request->description
        ]);

        return response()->json([
            'success' => 'Service criado com sucesso.'
        ]);
    }
}
