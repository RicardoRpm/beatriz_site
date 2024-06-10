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
        $service->title_fr = $request->title_fr;
        $service->title_pt = $request->title_pt;
        $service->title_en = $request->title_en;

        $service->description_fr = $request->description_fr;
        $service->description_pt = $request->description_pt;
        $service->description_en = $request->description_en;

        $service->save();
        return redirect()->route('admin.service')->with('status', 'Blog Post Form Data Has Been inserted');
    }

    //PROJECTS 
    public function projects() {
        return view('admin.projects');
    }

    public function storeProjects(Request $request) {

        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $imageName = time().'.'.$request->img->extension();
        $request->img->move(public_path('assets/img'), $imageName);

        $product = new Project();

        $product->title_pt = $request->title_pt;
        $product->title_fr = $request->title_fr;
        $product->title_en = $request->title_en;
        
        $product->description_fr = $request->description_fr;
        $product->description_pt = $request->description_pt;
        $product->description_en = $request->description_en;

        //dd($request);

        $product->img = 'assets/img/'.$imageName;
        $product->save();
        return redirect()->route('admin.project')->with('success', 'Product created successfully.');
    }
}
