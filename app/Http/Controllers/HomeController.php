<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\CategoryService;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Statistic;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $categoryService = CategoryService::all();
        $projects = Project::all();
        $products = Product::all();
        $statistic = Statistic::all();


        $name = ''; 
        $email = ''; 
        $selectCategoryService = ''; 
        $selectService = ''; 
        $subject = ''; 
        $message = ''; 
        $messageSuccess = ''; 
        $messageError = ''; 
        $btnText = '';

        switch (session('locale')) {
            case 'pt':
                $name = 'Nome'; 
                $email = 'Email'; 
                $selectService = 'Selecionar Serviço'; 
                $selectProduct = 'Produto Serviço'; 
                $subject = 'Assunto'; 
                $message = 'Mensagem'; 

                $selectCategoryService = "Selecionar categoria do serviço";
                $messageSuccess = 'Mensagem envida com sucesso';
                $messageError = 'Não foi possível enviar a mensgem';
                $btnText = 'Enviar Mensagem';
                break;
            case 'en':
                $name = 'Your Name'; 
                $email = 'Your Email'; 
                $selectService = 'Select Service'; 
                $selectProduct = 'Select Product';
                $subject = 'Subject'; 
                $message = 'Message'; 

                $selectCategoryService = "Select service category";
                $messageSuccess = 'Message sent successfully';
                $messageError = 'Unable to send message';
                $btnText = 'Send Message';
                break;
            default:
                $name = 'Votre Nom'; 
                $email = 'Votre E-mail'; 
                $selectService = 'Sélectionnez un Service'; 
                $selectProduct = 'Sélectionner un produit';
                $subject = 'Sujet'; 
                $message = 'Message';
                
                $selectCategoryService = "Sélectionnez la catégorie de service";
                $messageSuccess = 'Message envoyé avec succès';
                $messageError = 'Impossible d`envoyer le message';
                $btnText = 'Envoyer le Message';
                break;
        }

        return View('site.index', [
            'services' => $services,
            'projects' => $projects,
            'products' => $products,
            'statistic' => $statistic,
            'name' => $name, 
            'email' => $email, 
            'selectService' => $selectService, 
            'selectProduct' => $selectProduct, 
            'selectCategoryService' => $selectCategoryService,
            'categoryServices' => $categoryService,
            'subject' => $subject, 
            'message' => $message,
            'messageSuccess' => $messageSuccess,
            'messageError' => $messageError,
            'btnText' => $btnText
        ]);
    }

    public function store(Request $request)
    {
        try {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'service' => $request->service,
                'subject' => $request->subject,
                'description' => $request->description
            ]);
    
            Mail::to("ricardomiguel190@gmail.com")->send(new OrderShipped([
                'title' => 'The Title',
                'body' => 'The Body'
            ]));
    
            return response()->json([
                'success' => 'Service criado com sucesso.'
            ]);
        } catch(\Exception $e) {
            return response()->json([
                'error' => $e
            ]);
        }   
    }

    public function services(string $detail)
    {
        return View('site.services-details', [
            'detail' => trim($detail) 
        ]);
    }

    public function catalog(string $serv)
    {
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        
        switch ($serv) {
            case 'in':
                switch (session('locale')) {
                    case 'pt':
                        return response()->download(public_path('assets/catalogs/INDUSTRIAL - PT.pdf') , 'CATALOGO-INDDUSTRIAL-PT.pdf', $headers);
                        break;
                    case 'fr':
                        return response()->download(public_path('assets/catalogs/INDUSTRIAL - PT.pdf') , 'CATALOGO-INDDUSTRIAL-PT.pdf', $headers);
                        break;                    
                }
                break;
                case 're':
                    switch (session('locale')) {
                        case 'pt':

                            return response()->download(public_path('assets/catalogs/RENOVATION - PT.pdf') , 'CATALOGO-RENOVACAO-PT.pdf', $headers);

                            break;
                        case 'fr':
                            return response()->download(public_path('assets/catalogs/RENOVATION - FR.pdf') , 'CATALOGO-RENOVACAO-PT.pdf', $headers);

                            break;                    
                    }
                    break;
                case 'ne':
                    switch (session('locale')) {
                        case 'pt':
                                return response()->download(public_path('assets/catalogs/INDUSTRIAL - PT.pdf') , 'CATALOGO-LIMPEZA-PT.pdf', $headers);
                            break;
                        case 'fr':
    
                                return response()->download(public_path('assets/catalogs/INDUSTRIAL - PT.pdf') , 'CATALOGO-RENOVACAO-PT.pdf', $headers);

                            break;                    
                    }
                    break;
            
        }
    }

    public function loadServices(string $id){
        $services = Service::all()->where('', '=', $id);
    }
}
