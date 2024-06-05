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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $product = new Project();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->img = 'images/'.$imageName;
        $product->save();
        return redirect()->route('admin.projects')->with('success', 'Product created successfully.');
    }
}
