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
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->service = $request->service;
        $contact->subject = $request->subject;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->route('index')->with('success', 'Service criado com sucesso.');
    }
}
