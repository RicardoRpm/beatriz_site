<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Site\Recruitment;
use Illuminate\Http\Request;
use Session;

class RecruitmentController extends Controller
{

    public function index()
    {
        return View('site.recruitment');
    }

    public function store(Request $request)
    {
        $recruitment = new Recruitment();
        //dd($request);

        $recruitment->name = $request->name;
        $recruitment->bird_day = $request->bird_day;
        $recruitment->address = $request->address;
        $recruitment->province = $request->province;
        $recruitment->email = $request->email;
        $recruitment->phone = $request->phone;
        $recruitment->phone_alternative = $request->phone_alternative;
        $recruitment->academic_degree = $request->academic_degree;
        $recruitment->function_want = $request->function_want;

        $recruitment->ocupation1 = $request->ocupation1;
        $recruitment->ocupation2 = $request->ocupation2;
        $recruitment->ocupation3 = $request->ocupation3;
        $recruitment->year_of_expirience = $request->year_of_expirience;
        $recruitment->salary_want = $request->salary_want;
        $recruitment->how_find_us = $request->how_find_us;

        $recruitment->onshore_offshore = $request->onshore_offshore;

        $recruitment->informatic = $request->informatic == 'on' ? true : false;
        $recruitment->portuguese = $request->portuguese == 'on' ? true : false;
        $recruitment->english = $request->english == 'on' ? true : false;
        $recruitment->french = $request->french == 'on' ? true : false;

        $recruitment->bst = $request->bst == 'on' ? true : false;
        $recruitment->huet = $request->huet == 'on' ? true : false;
        $recruitment->maritime_note = $request->maritime_note == 'on' ? true : false;
        $recruitment->offshore_expirience = $request->offshore_expirience == 'on' ? true : false;
        $recruitment->active = true;

        $recruitment->save();

        //Session::flash('success_message', 'Cadastro feito com sucesso.');

        return redirect('recrutamento')->with('success_message', 'Registration done successfully.');
    }

    public function admin(){
        $recruitment = new Recruitment();

        return View('site.admin', ['recruitments' => $recruitment->all()]);
    }
}
