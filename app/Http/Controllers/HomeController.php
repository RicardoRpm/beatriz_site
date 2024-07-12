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

        $name = ''; 
        $email = ''; 
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
                
                $messageSuccess = 'Message envoyé avec succès';
                $messageError = 'Impossible d`envoyer le message';
                $btnText = 'Envoyer le Message';
                break;
        }

        return View('site.index', [
            'services' => $services,
            'projects' => $projects,
            'statistic' => $statistic,
            'name' => $name, 
            'email' => $email, 
            'selectService' => $selectService, 
            'selectProduct' => $selectProduct, 
            'subject' => $subject, 
            'message' => $message,
            'messageSuccess' => $messageSuccess,
            'messageError' => $messageError,
            'btnText' => $btnText
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
}
