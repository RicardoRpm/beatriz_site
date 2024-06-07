<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function services() {
        return view('admin.services');
    }

    public function store(Request $request) {
        $service = new Service();
        //dd($request);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return view('admin.service')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    //PROJECTS 
    public function projects() {
        return view('admin.projects');
    }

    public function storeProjects(Request $request) {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('assets/img'), $imageName);

        $product = new Project();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->img = 'assets/img/'.$imageName;
        $product->save();
        return redirect()->route('admin.project')->with('success', 'Product created successfully.');
    }
}
